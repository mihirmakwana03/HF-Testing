<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class YoutubeController extends Controller
{

    public function getPlaylistVideos()
    {
        try {
            $apiKey = config('services.youtube.api_key');
            // Log the API key for debugging purposes
            // Log::info('YOUTUBE API KEY', ['key' => $apiKey]);
            
            $playlistId = 'PLZt9-A1uphu_aJJrUhYwnhiHj04o3xpXr';
            $maxResults = 4;
    
            $response = Http::get('https://www.googleapis.com/youtube/v3/playlistItems', [
                'part' => 'snippet',
                'playlistId' => $playlistId,
                'maxResults' => $maxResults,
                'key' => $apiKey,
            ]);
    
            if ($response->successful()) {
                $items = $response->json('items');
                $videos = collect($items)->map(function ($item) {
                    return [
                        'title' => $item['snippet']['title'],
                        'thumbnail' => $item['snippet']['thumbnails']['medium']['url'],
                        'videoId' => $item['snippet']['resourceId']['videoId'],
                    ];
                });
                return response()->json($videos);
            }
    
            // Log the response body for debugging
            Log::error('YouTube API error response', ['body' => $response->body()]);
            return response()->json(['error' => 'Unable to fetch videos'], 500);
    
        } catch (\Exception $e) {
            // Log the exception message and stack trace
            Log::error('YouTube API Exception', ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return response()->json(['error' => 'Server error: ' . $e->getMessage()], 500);
        }
    }
}
