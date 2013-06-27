<?php

namespace Destiny\Tasks;

use Destiny\Application;
use Destiny\Config;
use Psr\Log\LoggerInterface;
use Destiny\Service\LeagueApiService;

class LeagueStatus {

	public function execute(LoggerInterface $log) {
		$log->debug ( 'Updated lol status' );
		$response = LeagueApiService::instance ()->getStatus ()->getResponse ();
		$app = Application::instance ();
		$app->getCacheDriver ()->save ( 'leaguestatus', $response );
	}

}