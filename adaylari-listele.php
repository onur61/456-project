<?php

require 'config.php';

$applicant = new Applicant();
$applicants = array();

$total_records = $applicant->totalApplicant();

$scroll_page = 5; 
$per_page = 10;
$current_page = $_GET['page']; 
$pager_url = 'adaylari-listele.php?page='; 
$inactive_page_tag = 'id="current_page"'; 
$previous_page_text = '&lt; Önceki Sayfa'; 
$next_page_text = 'Sonraki Sayfa &gt;'; 
$first_page_text = '&lt;&lt; Ilk Sayfa';
$last_page_text = 'Son Sayfa &gt;&gt;'; 
$pager_url_last = ''; 

$pager = & new pager();
$pager->pager_set($pager_url, $total_records, $scroll_page, $per_page, $current_page, $inactive_page_tag, $previous_page_text, 
$next_page_text, $first_page_text, $last_page_text, $pager_url_last);
//$users = $user->loadUsers($pager->start,$pager->per_page);
$applicants = $applicant->loadApplicants($pager->start,$pager->per_page);

$smarty->assign('title','Butun adaylar');
$smarty->assign('count',$total_records);
$smarty->assign('applicants',$applicants);
$smarty->assign('first',$pager->first_page);
$smarty->assign('links',$pager->page_links);
$smarty->assign('last',$pager->last_page);
$smarty->display('aday/adaylari-listele.tpl.html');
