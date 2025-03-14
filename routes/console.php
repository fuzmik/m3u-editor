<?php

use Illuminate\Support\Facades\Schedule;

/*
 * Register schedules
 */

// Check for updates
Schedule::command('app:update-check')
    ->daily();

// Refresh playlists
Schedule::command('app:refresh-playlist')
    ->everyFiveMinutes();

// Refresh EPG
Schedule::command('app:refresh-epg')
    ->everyFiveMinutes();

// Cleanup old/stale job batches
Schedule::command('app:flush-jobs-table')
    ->twiceDaily();
