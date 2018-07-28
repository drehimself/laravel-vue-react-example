<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel and React</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="bg-grey-light antialiased leading-normal">
    <div id="app" class="flex items-center justify-center mt-16">
        <div class="w-128 bg-white rounded shadow-md">
            @foreach ($tweets as $tweet)

                <div class="tweet flex border-b border-grey p-4">
                    <div class="w-1/6"><img src="{{ $tweet->avatar }}" alt="avatar" class="rounded-full"></div>
                    <div class="w-5/6 ml-8">
                        <div class="mb-3">
                            <span class="font-semibold">{{ $tweet->realname }}</span>
                            <span class="text-grey-darker">{{ $tweet->username }}</span>
                            <span class="text-grey-darker">&middot;</span>
                            <span class="text-grey-darker">2h</span>
                        </div>
                        <div class="mb-3">{{ $tweet->quote }}</div>
                        <div class="flex justify-between w-64">
                            <div class="flex items-center text-grey-darkest cursor-pointer hover:text-blue">
                                <div>
                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="20" height="20"><path class="heroicon-ui" d="M2 15V5c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v15a1 1 0 0 1-1.7.7L16.58 17H4a2 2 0 0 1-2-2zM20 5H4v10h13a1 1 0 0 1 .7.3l2.3 2.29V5z"/></svg>
                                </div>
                                <div class="ml-2">{{ $tweet->comments }}</div>
                            </div>
                            <div class="flex items-center text-grey-darkest cursor-pointer hover:text-green">
                                <div>
                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path class="heroicon-ui" d="M5.41 16H18a2 2 0 0 0 2-2 1 1 0 0 1 2 0 4 4 0 0 1-4 4H5.41l2.3 2.3a1 1 0 0 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 1 1 1.42 1.4L5.4 16zM6 8a2 2 0 0 0-2 2 1 1 0 0 1-2 0 4 4 0 0 1 4-4h12.59l-2.3-2.3a1 1 0 1 1 1.42-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.42-1.4L18.6 8H6z"/></svg>
                                </div>
                                <div class="ml-2">{{ $tweet->retweets }}</div>
                            </div>
                            <likes
                                :likes="{{ $tweet->likes }}"
                                :tweet-id="{{ $tweet->id }}"
                            >
                            </likes>

                        </div>
                    </div>
                </div> <!-- end tweet -->
            @endforeach
        </div>
    </div>

    <script src="js/app.js"></script>
</body>
</html>
