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
            <div class="tweet flex border-b border-grey p-4">
                <div class="w-1/6"><img src="img/avatar1.png" alt="avatar" class="rounded-full"></div>
                <div class="w-5/6 ml-8">
                    <div class="mb-3">
                        <span class="font-semibold">Andre Madarang</span>
                        <span class="text-grey-darker">@drehimself</span>
                        <span class="text-grey-darker">&middot;</span>
                        <span class="text-grey-darker">2h</span>
                    </div>
                    <div class="mb-3">This is a tweet for you. I plan to release some new screencasts soon!</div>
                    <div class="flex justify-between w-64">
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-blue">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="20" height="20"><path class="heroicon-ui" d="M2 15V5c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v15a1 1 0 0 1-1.7.7L16.58 17H4a2 2 0 0 1-2-2zM20 5H4v10h13a1 1 0 0 1 .7.3l2.3 2.29V5z"/></svg>
                            </div>
                            <div class="ml-2">5</div>
                        </div>
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-green">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path class="heroicon-ui" d="M5.41 16H18a2 2 0 0 0 2-2 1 1 0 0 1 2 0 4 4 0 0 1-4 4H5.41l2.3 2.3a1 1 0 0 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 1 1 1.42 1.4L5.4 16zM6 8a2 2 0 0 0-2 2 1 1 0 0 1-2 0 4 4 0 0 1 4-4h12.59l-2.3-2.3a1 1 0 1 1 1.42-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.42-1.4L18.6 8H6z"/></svg>
                            </div>
                            <div class="ml-2">8</div>
                        </div>
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-red">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
                            </div>
                            <div class="ml-2">4</div>
                        </div>

                    </div>
                </div>
            </div> <!-- end tweet -->

            <div class="tweet flex border-b border-grey p-4">
                <div class="w-1/6"><img src="img/avatar2.png" alt="avatar" class="rounded-full"></div>
                <div class="w-5/6 ml-8">
                    <div class="mb-3">
                        <span class="font-semibold">Laravel</span>
                        <span class="text-grey-darker">@laravelphp</span>
                        <span class="text-grey-darker">&middot;</span>
                        <span class="text-grey-darker">8h</span>
                    </div>
                    <div class="mb-3">Nova is a beautifully designed administration panel for Laravel. Coming soon!</div>
                    <div class="flex justify-between w-64">
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-blue">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="20" height="20"><path class="heroicon-ui" d="M2 15V5c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v15a1 1 0 0 1-1.7.7L16.58 17H4a2 2 0 0 1-2-2zM20 5H4v10h13a1 1 0 0 1 .7.3l2.3 2.29V5z"/></svg>
                            </div>
                            <div class="ml-2">3</div>
                        </div>
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-green">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path class="heroicon-ui" d="M5.41 16H18a2 2 0 0 0 2-2 1 1 0 0 1 2 0 4 4 0 0 1-4 4H5.41l2.3 2.3a1 1 0 0 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 1 1 1.42 1.4L5.4 16zM6 8a2 2 0 0 0-2 2 1 1 0 0 1-2 0 4 4 0 0 1 4-4h12.59l-2.3-2.3a1 1 0 1 1 1.42-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.42-1.4L18.6 8H6z"/></svg>
                            </div>
                            <div class="ml-2">6</div>
                        </div>
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-red">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
                            </div>
                            <div class="ml-2">24</div>
                        </div>

                    </div>
                </div>
            </div> <!-- end tweet -->

            <div class="tweet flex border-b border-grey p-4">
                <div class="w-1/6"><img src="img/avatar3.png" alt="avatar" class="rounded-full"></div>
                <div class="w-5/6 ml-8">
                    <div class="mb-3">
                        <span class="font-semibold">React</span>
                        <span class="text-grey-darker">@reactjs</span>
                        <span class="text-grey-darker">&middot;</span>
                        <span class="text-grey-darker">16h</span>
                    </div>
                    <div class="mb-3">We're working on a large-scale rearchitecture of React Native to make the framework more flexible and integrate better with native infrastructure.</div>
                    <div class="flex justify-between w-64">
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-blue">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="20" height="20"><path class="heroicon-ui" d="M2 15V5c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v15a1 1 0 0 1-1.7.7L16.58 17H4a2 2 0 0 1-2-2zM20 5H4v10h13a1 1 0 0 1 .7.3l2.3 2.29V5z"/></svg>
                            </div>
                            <div class="ml-2">15</div>
                        </div>
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-green">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path class="heroicon-ui" d="M5.41 16H18a2 2 0 0 0 2-2 1 1 0 0 1 2 0 4 4 0 0 1-4 4H5.41l2.3 2.3a1 1 0 0 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 1 1 1.42 1.4L5.4 16zM6 8a2 2 0 0 0-2 2 1 1 0 0 1-2 0 4 4 0 0 1 4-4h12.59l-2.3-2.3a1 1 0 1 1 1.42-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.42-1.4L18.6 8H6z"/></svg>
                            </div>
                            <div class="ml-2">32</div>
                        </div>
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-red">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
                            </div>
                            <div class="ml-2">22</div>
                        </div>

                    </div>
                </div>
            </div> <!-- end tweet -->

            <div class="tweet flex border-b border-grey p-4">
                <div class="w-1/6"><img src="img/avatar4.png" alt="avatar" class="rounded-full"></div>
                <div class="w-5/6 ml-8">
                    <div class="mb-3">
                        <span class="font-semibold">Vue.js</span>
                        <span class="text-grey-darker">@vuejs</span>
                        <span class="text-grey-darker">&middot;</span>
                        <span class="text-grey-darker">22h</span>
                    </div>
                    <div class="mb-3">Who's excited for the very first @vuejs Conference in #Canada? 🇨🇦</div>
                    <div class="flex justify-between w-64">
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-blue">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="20" height="20"><path class="heroicon-ui" d="M2 15V5c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v15a1 1 0 0 1-1.7.7L16.58 17H4a2 2 0 0 1-2-2zM20 5H4v10h13a1 1 0 0 1 .7.3l2.3 2.29V5z"/></svg>
                            </div>
                            <div class="ml-2">15</div>
                        </div>
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-green">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path class="heroicon-ui" d="M5.41 16H18a2 2 0 0 0 2-2 1 1 0 0 1 2 0 4 4 0 0 1-4 4H5.41l2.3 2.3a1 1 0 0 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 1 1 1.42 1.4L5.4 16zM6 8a2 2 0 0 0-2 2 1 1 0 0 1-2 0 4 4 0 0 1 4-4h12.59l-2.3-2.3a1 1 0 1 1 1.42-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.42-1.4L18.6 8H6z"/></svg>
                            </div>
                            <div class="ml-2">22</div>
                        </div>
                        <div class="flex items-center text-grey-darkest cursor-pointer hover:text-red">
                            <div>
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 18" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
                            </div>
                            <div class="ml-2">36</div>
                        </div>

                    </div>
                </div>
            </div> <!-- end tweet -->


        </div>
    </div>
</body>
</html>
