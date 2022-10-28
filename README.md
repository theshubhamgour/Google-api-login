# Google-api-login


As a web user, you've probably experienced the hassle of managing different accounts for different sites—specifically, when you have several passwords for different services, and a website asks you to create yet another account on their site.


![image](https://user-images.githubusercontent.com/72512204/198700289-4df6a0b6-849c-4304-8ba7-866c3de79667.png)

To deal with this, you could offer a single sign-on feature to allow visitors to use their existing credentials to open an account on your site. A lot of websites nowadays let users log in by using their existing accounts at Google, Facebook, or some other popular service. This is a convenient way for new users to register with a third-party site instead of signing up for a new account with yet another username and password.

In this short project, we’ll use the Google OAuth login API, which allows users to log in with their existing Google accounts. Of course, users should still be able to register with the usual registration form on your site, but providing Google login or something like it can help maintain a healthy user retention ratio.


# How Google Login Works
Let's quickly go through the top-level data flow of the whole process. So, there are main three entities involved in the login process: the user, the third-party website, and Google.

On the login page of the site, there are two options users could choose from to log in. The first one is to provide a username and password if they already have an account with your site. And the other is to log in on your site with their existing Google account.

![image](https://user-images.githubusercontent.com/72512204/198700516-3774e7ba-4e25-4e59-af27-b81740a78527.png)

When they click on the Login With Google button, it initiates the Google login flow and takes users to the Google site for login. Once there, they log in with their Google credentials, and after that they will be redirected to the consent page.

On the consent page, users will be asked for permission to share their Google account information with the third-party site. In this case, the third-party site is a site where they want to use their Google account for login.

![image](https://user-images.githubusercontent.com/72512204/198700695-dd5d17f2-e478-46ce-8a95-cebe9c264385.png)


At this point, the user is logged in with Google, and the third-party site has access to the user profile information which can be used to create an account and do user login. So that’s the basic flow of integrating Google login on your site.
