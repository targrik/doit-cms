<?php
	
	include_once ('config.php');
	$start_time = microtime(true);
	include_once ('cms/cms.php');
	
	header('Content-type: text/html; Charset=UTF-8');

	/*
	//������� ��� ��������� ������ SEO
	d()->Seo->init();
	$result= d()->Seo->process(d()->main());
	*/
	print d()->main();
	
	$exec_time = microtime(true) - $start_time;
	header("X-CMS-Runtime: {$exec_time}s, ". memory_get_usage(true).'b');
	print $result;
	
