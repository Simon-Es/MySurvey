<?php
namespace MySurvey;


spl_autoload_register(function ($className) {
$fileName = dirname(__DIR__) .'/'.str_replace("\\", "/", $className).".php";

	//if (file_exists($fileName)) {
		require_once $fileName;
	//}
});

if (isset($_GET['p'])){
switch ($_GET['p']) {
	case 'submissons':	$p=new SubmissionsPage('Beitr&auml;ge');break;
	case 'admin':		$p=new AdminPage('MySurvey - Administration');		break;
	case 'login':		$p=new LoginPage('MySurvey - Login');				break;
	case 'survey':		$p=new SurveyPage('MySurvey');				break;
	case 'result':		$p=new ResultPage('MySurvey - Auswertung');			break;
	default: 			$p=new OverviewPage('MySurvey');
}
}else {
	$p=new OverviewPage('MySurvey');
}
$p->display();
?>
