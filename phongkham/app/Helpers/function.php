<?php 
	// function get_login()
	// {
	// 	dd('111');
	// }
	if (!function_exists('upload_image')) 
	{
		/**
         * @param $file [tên file trùng tên input]
         * @param array $extend [ định dạng file có thể upload được]
         * @return array|int [ tham số trả về là 1 mảng - nếu lỗi trả về int ]
         */
		function upload_image($file, $folder='', array $extend = array())
		{
			$code = 1;
			//lấy đường dẫn ảnh
			$baseFilename = public_path().'/hinhanh/'.$_FILES[$file]['name'];
			//thông tin file
			$infor = new SplFileInfo($baseFilename);
			//đuôi file
			$ext = strtolower($infor->getExtension());

			//kiểm tra định dạng file
			if (!$extend){
				$extend = ['png','jpg','jpeg','webp'];
			} 						
			if (!in_array($ext,$extend)){
				return $data['code'] = 0;
			} 		
			//tên file mới
			$nameFile = trim(str_replace('.'.$ext,'',strtolower($infor->getFilename())));
			$filename = date('Y-m-d__').\Illuminate\Support\Str::slug($nameFile).'.'.$ext;

			//thư mục gốc để upload
			$path = public_path().'/hinhanh/'.date('Y/m/d/');
			if($folder){
				$path = public_path().'/hinhanh/'.$folder.'/'.date('Y/m/d/');
			}
			if(!\File::exists($path)){
				mkdir($path,0777,true);
			}
			//di chuyển file vào thư mục upload
			move_uploaded_file($_FILES[$file]['tmp_name'], $path.$filename);
			$data = [
				'name' => $filename,
				'code' => $code,
				'path' => $path,
				'path_img' => 'hinhanh/'.$filename
			];
			return $data;
		}
	}
	if (!function_exists('pare_url_file')) {
		function pare_url_file($image,$folder = '')
		{
			if(!$image)
			{
				return '/images/no-image.jpg';
			}
			$explode = explode('__', $image);//chuỗi thành mảng
			if (isset($explode[0])) {
				$time = str_replace('_', '/', $explode[0]);
				return '/hinhanh'.$folder.'/' . date('Y/m/d',strtotime($time)).'/'.$image;
			}
		}
	}	


