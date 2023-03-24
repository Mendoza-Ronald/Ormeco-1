<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class UserController extends Controller
{

	public function __construct()
	{

		parent::__construct();

		if ($this->User_model->is_logged_in()) {
		} else {
			redirect('user-authentication');
		}
	}



	/**
	 * Summary of index
	 * @return void
	 */
	public function index()
	{

		// if ($this->User_model->is_logged_in()) {

		$data = [
			'get_all_users' => $this->User_model->get_all_users(),
			'getAllEvent' => $this->CreateEvent_model->getAllEvent()


		];


		$this->call->view('inc/user/header', $data);
		$this->call->view('inc/user/right-sidebar', $data);
		$this->call->view('inc/user/left-sidebar', $data);
		$this->call->view('user_page/index', $data);
		$this->call->view('inc/user/footer', $data);
		// } else {
		// 	redirect('user-authentication');
		// }
	}




	/**
	 * Summary of timeline
	 * @return void
	 */
	public function timeline()
	{

		$data = [
			'get_all_users' => $this->User_model->get_all_users()

		];
		$this->call->view('inc/user/header', $data);
		$this->call->view('inc/user/right-sidebar', $data);
		$this->call->view('inc/user/left-sidebar', $data);
		$this->call->view('user_page/timeline', $data);
		$this->call->view('inc/user/footer', $data);
	}

	#-----------------------------------------#
	#                                         #
	#              About View                 #
	#                                         #
	#-----------------------------------------#
	public function about()
	{

		$data = [
			'get_all_users' => $this->User_model->get_all_users()

		];
		$this->call->view('inc/user/header', $data);
		$this->call->view('inc/user/right-sidebar', $data);
		$this->call->view('inc/user/left-sidebar', $data);
		// $this->call->view('inc/user/user-profile');

		$this->call->view('user_page/about', $data);
		$this->call->view('inc/user/footer', $data);
	}

	#-----------------------------------------#
	#                                         #
	#              Setting View               #
	#                                         #
	#-----------------------------------------#

	public function setting()
	{



		$data = [
			'get_all_users' => $this->User_model->get_all_users()

		];

		$this->call->view('inc/user/header', $data);
		$this->call->view('inc/user/right-sidebar', $data);
		$this->call->view('inc/user/left-sidebar', $data);
		// $this->call->view('inc/user/user-profile');

		$this->call->view('user_page/setting', $data);
		$this->call->view('inc/user/footer', $data);
	}

	#-----------------------------------------#
	#                                         #
	#              Setting View               #
	#                                         #
	#-----------------------------------------#

	public function post_detail($event_id)
	{



		$data = [
			'event_detail' => $this->CreateEvent_model->event_details($event_id),

			'get_all_users' => $this->User_model->get_all_users(),
			'getAllComment' => $this->Comment_model->getAllComment($event_id),
			'countComment' => $this->Comment_model->countComment($event_id),


		];

		$this->call->view('inc/user/header', $data);
		$this->call->view('inc/user/right-sidebar', $data);
		$this->call->view('inc/user/left-sidebar', $data);
		// $this->call->view('inc/user/user-profile');

		$this->call->view('user_page/post-detail', $data);
		$this->call->view('inc/user/footer', $data);
	}
	#-----------------------------------------#
	#                                         #
	#              Events  View               #
	#                                         #
	#-----------------------------------------#

	public function events()
	{



		$data = [
			'get_all_users' => $this->User_model->get_all_users()

		];

		$this->call->view('inc/user/header', $data);
		$this->call->view('inc/user/right-sidebar', $data);
		$this->call->view('inc/user/left-sidebar', $data);
		// $this->call->view('inc/user/user-profile');

		$this->call->view('user_page/events', $data);
		$this->call->view('inc/user/footer', $data);
	}

	#-----------------------------------------#
	#                                         #
	#      Chat Messenger  View               #
	#                                         #
	#-----------------------------------------#

	public function chat_messenger()
	{



		$data = [
			'get_all_users' => $this->User_model->get_all_users()

		];

		$this->call->view('inc/user/header', $data);
		// $this->call->view('inc/user/right-sidebar', $data);
		// $this->call->view('inc/user/left-sidebar', $data);
		// $this->call->view('inc/user/user-profile');

		$this->call->view('user_page/chat-messenger', $data);
		$this->call->view('inc/user/footer', $data);
	}
	#-----------------------------------------#
	#                                         #
	#             add user info               #
	#                                         #
	#-----------------------------------------#
	public function add_info()
	{

		if ($this->form_validation->submitted()) {
			if ($this->form_validation->run()) {


				if (!$this->User_model->exist_user_info($this->io->post('user_id'))) {


					$this->User_model->add_info_user(
						$this->io->post('user_id'),
						$this->io->post('firstname'),
						$this->io->post('middlename'),
						$this->io->post('lastname'),
						$this->io->post('suffix'),
						$this->io->post('about'),
						$this->io->post('bloodtype'),
						$this->io->post('gender'),
						$this->io->post('region'),
						$this->io->post('province'),
						$this->io->post('city'),
						$this->io->post('barangay'),
						$this->io->post('occupation')
					);
				} else {
					set_flash_alert('danger', 'Your Information already exists. Update your information');
				}

				$this->User_model->update_user_name($this->io->post('user_id'), $this->io->post('username'), $this->io->post('email'));
				// $data = ['status' => 'Information Successfully Added'];

				// return $this->response->setJson($data);
			}
		}
	}

	function getdata()
	{
		$user_info = $this->User_model->get_user_information();

		echo json_encode($user_info);
	}

	public function upload_profile_image()
	{
		if ($_POST['image']) {
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
			$type = "";

			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}

			// Allow certain file formats
			if (
				$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif"
			) {
				echo "Sorry only images and videos are allowed";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				return false;
				// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					return basename($_FILES["image"]["name"]);
				} else {
					return false;
				}
			}
		}
	}
}