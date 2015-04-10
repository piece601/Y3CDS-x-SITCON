<?php

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('article_model');
	}

	public function index() // 預設載入
	{
		$query = $this->article_model->select_all_data();
		$this->load->view('article_index', [
			'query' => $query
		]);
		return true;
	}

	public function create()
	{
		if ( ! $this->input->post() ) {
			$this->load->view('article_create');
			return true;
		}
		$data['title'] = $this->input->post('title', true);
		$data['content'] = $this->input->post('content', true);
		if ( ! $this->article_model->insert_data($data) ) {
			echo "新增失敗";
			return true;
		}
		echo "新增成功";
		return true;
	}

	public function show($id = null)
	{
		$query = $this->article_model->select_data($id);
		$this->load->view('article_show', [
			'query' => $query
		]);
		return true;
	}

	public function edit($id = null)
	{
		if ( ! $query = $this->article_model->select_data($id) ) {
			echo "查無此資料";
			return true;
		}

		if ( ! $this->input->post() ) {
			$this->load->view('article_edit', [
				'query' => $query
			]);
			return true;
		}

		$data = [
			'id' => $id,
			'title' => $this->input->post('title', true),
			'content' => $this->input->post('content', true)
		];

		if ( ! $this->article_model->update_data($data) ) {
			echo "更新失敗";
			return true;
		}
		echo "更新成功";
		return true;
	}

	public function delete($id = null)
	{
		if ( ! $query = $this->article_model->select_data($id) ) {
			echo "查無此資料";
			return true;
		}

		if ( ! $this->article_model->delete_data($id) ) {
			echo "刪除失敗";
			return true;
		}

		echo "刪除成功";
		return true;
	}
}