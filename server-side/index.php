<?php
	// File Manager.
	// (C) 2020 CubicleSoft.  All Rights Reserved.
header("Access-Control-Allow-Origin: *"); //CORS
	header('Access-Control-Allow-Methods:*');
	header('Access-Control-Allow-Headers:*');
	header("Access-Control-Request-Headers: *");
	header("Access-Control-Allow-Credentials: true");
	require_once "support/str_basics.php";
	require_once "support/page_basics.php";

	Str::ProcessAllInput();

	require_once "config.php";

	$rootpath = str_replace("\\", "/", dirname(__FILE__));

	$bb_randpage = $config["token_secret"];
	$bb_rootname = "File Manager";

	$bb_usertoken = "";
	$bb_username = "";
	$admin_version = array(1, 0, 0);

	@session_start();

	// Allow developers to interface with a login system.
//	if (file_exists($rootpath . "/index_hook.php"))  require_once $rootpath . "/index_hook.php";
//	else if (!isset($_SESSION["fm_admin_logged_in"]))
//	{
//		if (isset($_REQUEST["password"]))
//		{
//			if ($config["password"] === false || !password_verify($_REQUEST["password"], $config["password"]))  BB_SetPageMessage("error", "Invalid password.  Reset hash:  " . password_hash($_REQUEST["password"], PASSWORD_DEFAULT));
//
//			if (BB_GetPageMessageType() != "error")
//			{
//				$_SESSION["fm_admin_logged_in"] = true;
//
//				header("Location: " . BB_GetFullRequestURLBase());
//
//				exit();
//			}
//		}
//
//		$contentopts = array(
//			"desc" => "Enter login information.",
//			"fields" => array(
//				array(
//					"title" => "Password",
//					"type" => "password",
//					"name" => "password",
//					"default" => ""
//				),
//			),
//			"submit" => "Login"
//		);
//
//		BB_GeneratePage("Login", array(), $contentopts);
//
//		exit();
//	}

	BB_ProcessPageToken("action");

	// Heartbeat.
	if (isset($_REQUEST["action"]) && $_REQUEST["action"] == "heartbeat")
	{
		$_SESSION["lastts"] = time();

		echo "OK";

		exit();
	}

	// Handle most File Explorer options via the helper class.
	require_once "support/file_explorer_fs_helper.php";
	require_once "support/file_upload_helper.php";

	$thumbsurl = BB_GetFullRequestURLBase();
	if (substr($thumbsurl, -1) === "/")  $thumbsurl = rtrim($thumbsurl, "/");
	else  $thumbsurl = dirname($thumbsurl);

	$options = array(
		"protect_depth" => 0,
		"recycle_to" => ($config["recycling"] ? BB_Translate("Recycle Bin") : false),
		"temp_dir" => str_replace("\\", "/", sys_get_temp_dir()),
		"dot_folders" => $config["dot_folders"],  // .git, .svn, .DS_Store
		"allowed_exts" => $config["file_exts"],
		"allow_empty_ext" => $config["allow_empty_ext"],
		"thumbs_dir" => $rootpath . "/thumbs",
		"thumbs_url" => $thumbsurl . "/thumbs",
		"thumb_create_url" => BB_GetFullRequestURLBase() . "?action=file_explorer_thumbnail&sec_t=" . BB_CreateSecurityToken("file_explorer_thumbnail"),
		"refresh" => true,
		"rename" => true,
		"file_info" => $config["tabbed"],
		"load_file" => $config["tabbed"],
		"save_file" => $config["tabbed"],
		"new_folder" => true,
		"new_file" => $config["new_file_ext"],
		"upload" => true,
		"upload_limit" => ($config["upload_limit"] < 0 ? -1 : Str::ConvertUserStrToBytes($config["upload_limit"])),  // -1 for unlimited or an integer
		"download" => ($bb_username !== "" ? $bb_username . "-" : "") . date("Y-m-d_H-i-s") . ".zip",
		"download_module" => "",  // Server handler for single-file downloads:  "" (none), "sendfile" (Apache), "accel-redirect" (Nginx)
		"download_module_prefix" => "",  // A string to prefix to the filename.  (For URI /protected access mapping for a Nginx X-Accel-Redirect to the system root)
		"copy" => true,
		"move" => true,
		"recycle" => $config["recycling"],
		"delete" => true
	);

	if ($config["projects_url"] != "")  $options["base_url"] = $config["projects_url"];

	// Allow modification of the options to be passed to the action helper.
	if (is_callable("ModifyFileExplorerOptions"))  call_user_func_array("ModifyFileExplorerOptions", array(&$options));

	FileExplorerFSHelper::HandleActions("action", "file_explorer_", $config["projects_path"], $options);


	// Main editing interface.
	header("Content-Type: text/html; charset=UTF-8");
    header("Access-Control-Allow-Origin: *"); //CORS
	header('Access-Control-Allow-Methods:*');
	header('Access-Control-Allow-Headers:*');
	header("Access-Control-Request-Headers: *");

	$acemodes = array();
	$acethemes = array();

	if ($config["tabbed"])
	{
		$dir = @opendir($rootpath . "/support/ace");
		if ($dir)
		{
			while (($file = readdir($dir)) !== false)
			{
				if (substr($file, -3) !== ".js")  continue;

				if (substr($file, 0, 5) === "mode-")  $acemodes[$file] = array("name" => "ace/mode/" . substr($file, 5, -3), "value" => substr($file, 5, -3));
				if (substr($file, 0, 6) === "theme-")  $acethemes[$file] = array("name" => "ace/theme/" . substr($file, 6, -3), "value" => substr($file, 6, -3));
			}

			closedir($dir);
		}

		ksort($acemodes, SORT_NATURAL | SORT_FLAG_CASE);
		ksort($acethemes, SORT_NATURAL | SORT_FLAG_CASE);

		$acemodes = array_values($acemodes);
		$acethemes = array_values($acethemes);
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>FileManager Endpoint</title>

</head>
<body>

<?php
	if ($config["tabbed"])
	{
?>

<?php
	}
?>

</script>

</body>
</html>
