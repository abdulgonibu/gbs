<?php
use App\Controllers\PortfoliosControllers;
use App\Controllers\WellcomeControllers;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('phpmvc/', [WellcomeControllers::class, 'hello']);

// SimpleRouter::get('phpmvc/portfolios', [PortfoliosController::class, 'index']);
SimpleRouter::get('phpmvc/portfolios', [PortfoliosControllers::class, 'index']);