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
    <div class="flex items-center justify-center mt-16">
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
                            <div class="flex items-center text-grey-darkest cursor-pointer hover:text-red">
                                <div>
                                    <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
                                </div>
                                <div class="ml-2">{{ $tweet->likes }}</div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end tweet -->
            @endforeach




        </div>
    </div>
</body>
</html>
