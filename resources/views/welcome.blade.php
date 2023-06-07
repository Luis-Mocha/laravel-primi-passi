<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    
                    <h1 class="text-gray-900 dark:text-white">My Laravel</h1>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">

                            <div class="flex items-center">
                                <img src="data:image/png;base64,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" alt="">
                            </div>

                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l"></div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="" class="underline text-gray-900 dark:text-white">BY</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic quaerat est similique delectus illo dicta laborum culpa eligendi sunt exercitationem. Voluptas repellat iusto cupiditate laudantium. Odit, reiciendis. Unde, corporis eum.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white underline">LUIS</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eligendi aspernatur cum, dolorem repellendus porro animi praesentium cumque dicta ad quas sapiente reiciendis dolores placeat corporis consequuntur recusandae nemo doloribus!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        With Love
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
