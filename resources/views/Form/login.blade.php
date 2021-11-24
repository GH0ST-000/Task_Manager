<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="https://stackoverflow.design/assets/img/logos/se/se-icon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="https://stackoverflow.design/assets/img/logos/se/se-icon.svg" type="image/x-icon" />
</head>
<body>

<div class="grid grid-cols-3">
    <div class="flex w-48 h-10 rounded-md bg-indigo-300 text-white mt-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mt-3 ml-2 bi bi-skip-backward" viewBox="0 0 16 16">
            <path d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm7 1.133L1.696 8 7.5 11.367V4.633zm7.5 0L9.196 8 15 11.367V4.633z"/>
        </svg>
        <a href="/" class="ml-4 mt-2">
            Back to Welcome
        </a>
    </div>
    <div>
        <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <div>
                    <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Sign in to your account
                    </h2>

                </div>

                <div class="rounded bg-white max-w-md rounded overflow-hidden shadow-xl p-5">

                    <form class="space-y-4 border-b-2 border-gray-800" action="/custom-login" method="POST">
                        @csrf
                        <input type="hidden" name="remember" value="true">
                        <div class="rounded-md shadow-sm -space-y-px">
                            <div class="grid gap-6">
                                <div class="col-span-12">
                                    <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                                    <input type="email" name="email" id="email_address" autocomplete="email"
                                           class="border h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @if ($errors->has('email'))
                                        <span class="bg-gray-800 text-red-600 font-medium text-sm rounded-md">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="col-span-12">
                                    <label class="block text-sm font-medium text-gray-700">Password</label>
                                    <input type="password" name="password" autocomplete="off"
                                           class="border h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @if ($errors->has('password'))
                                        <span class="bg-gray-800 text-red-600 font-medium text-sm rounded-md">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                    Remember me
                                </label>
                            </div>

                            <div class="text-sm">
                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                    Forgot your password?
                                </a>
                            </div>
                        </div>


                        <div>
                            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
							<span class="absolute left-0 inset-y-0 flex items-center pl-3">
								<!-- Heroicon name: solid/lock-closed -->
								<svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
									<path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
								</svg>
							</span>
                                Sign in
                            </button>
                            <p class="mt-2 text-center text-sm text-gray-600">
                                Or
                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                    <br>
                                    Start Your Social Account
                                </a>
                            </p>
                            <div class="col-span-6">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">Google</label>
                                <a href="https://google.com" class="mt-1 focus:ring-indigo-500 border focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <img style="margin-top:2%" class=" ml-48  items-center justify-between flex" src="https://d2k1ftgv7pobq7.cloudfront.net/meta/c/p/res/images/8215f6659adc202403198fef903a447e/sign-in-with-google.svg">
                                </a>
                            </div>
                            <div class="col-span-12">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">Microsoft</label>
                                <a href="https://www.microsoft.com/en-us/" class="mt-1 focus:ring-indigo-500 border focus:border-indigo-500 block w-full h-8 shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <img style="margin-top:1.5%" class="ml-48  items-center justify-between flex" src="https://d2k1ftgv7pobq7.cloudfront.net/meta/c/p/res/images/72ece804e5285ab6507e2406157cda3c/microsoft-logo.svg">
                                </a>
                            </div>
                            <div class="col-span-12 mt-4">
                                <a class="ml-12 text-blue-700" href="/singup">Can't Log In ? &bull; Sing Up For An Account</a>
                            </div>
                            <br>
                            <div class="col-span-12 mt-4 ml-20">
                                <a class="ml-12 text-blue-700" href="/singup">Privacy &bull; Policy</a>
                            </div>
                            <br>
                            <br>
                        </div>

                </div>
                </form>
                <div class="col-span-12 mt-4">
                    <img style="width: 100px;" class="ml-44  text-blue-700" src="https://d2k1ftgv7pobq7.cloudfront.net/meta/c/p/res/images/16006ae28f149063408d601e8c80eddc/atlassian-logo-blue-small.svg" >
                </div>
                <div class="col-span-12 mt-4 flex justify-between text-gray-600">
                    <a href="#">Templates</a>
                    <a href="#">Pricing</a>
                    <a href="#">App</a>
                    <a href="#">Job</a>
                    <a href="#">Blog</a>
                    <a href="#">Developers</a>
                    <a href="#">Help</a>
                </div>
            </div>
        </div>
    </div>
    <div>
    </div>
</div>


</body>
</html>
