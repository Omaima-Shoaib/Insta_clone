commands
<br>
1- npm install && run dev
<br>
2- php artisan migrate
<br>
3- php artisan db:seed
<br>
4- composer dump-autoload
<br>
5- php artisan queue:work
<br>
6- php artisan serve





<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## Omaima Shoaib Ahmed
1.User can add post(single/multiple images, caption)<br>
2.Image is required while caption is optional<br>
3.View post (author name, time created, user_avatar, caption, images, number of likes, savepost button, add comment box, post comments that include
user name, time comment is created and comment text .<br>
4.User can display saved list 'only post caption is displayed' user can view and delete post from saved list.<br>
![welcom1](https://user-images.githubusercontent.com/102256485/186942941-f76eb5c4-0653-4f7a-92cd-e867494fdb92.jpg)
![create1](https://user-images.githubusercontent.com/102256485/186943115-b62aee27-ea2d-4bc5-ac71-641a5f737526.jpg)
![view_post1](https://user-images.githubusercontent.com/102256485/186943067-a4ea332f-627c-4e0d-9dd9-d5ccece08c33.jpg)
![saved_posts1](https://user-images.githubusercontent.com/102256485/186943163-8e270381-c020-4b0c-96da-7ad7142183b5.jpg)
![emptylist](https://user-images.githubusercontent.com/102256485/186944844-fa92eed7-9f33-4549-b51d-5e75e4eb7772.jpg)



<br><br>
## Aya Ibrahim 
1. User can Login and Sign up by laravel breeze.<br>
2. We send verify message to user using Mailtrap to login in website (hint: to my mailtrap to verify user email). <br>
3. User can also login with his google account and it wil send verify message. <br>
4. We will send notification when registered to website.<br>
5. If you forget your password , you will receive resent message and you can change it. <br>
6. User will receive welcome notification to his mail after register (using php artisan queue) (hint: to my mailtrap to user email). <br>
![login](https://user-images.githubusercontent.com/102617431/187003036-f3122298-5026-41bc-bbfc-094fd5cab5e3.JPG)
![signup_with_google_account](https://user-images.githubusercontent.com/102617431/187003144-64ae629e-cdb8-4325-806d-2277c4d82582.JPG)
![sign_up](https://user-images.githubusercontent.com/102617431/187003513-c473ce6a-19d1-4fc0-bb9f-90e0750dd1c9.JPG)
![verify_email](https://user-images.githubusercontent.com/102617431/187003753-bfee9a0b-34c6-4775-a6bc-f2029d697d96.JPG)
![mailtrap_verify_mail](https://user-images.githubusercontent.com/102617431/187004564-5e252d6d-2bdc-478a-b2ab-1a70c6a206f1.JPG)
![forget-password](https://user-images.githubusercontent.com/102617431/187004880-69865be6-2515-4cf8-b936-2d92d11d3034.JPG)
![reset-password-notification](https://user-images.githubusercontent.com/102617431/187004977-9d0db2b5-5417-45f7-8b02-975b2f32eba8.JPG)
![change_password](https://user-images.githubusercontent.com/102617431/187005139-78165d0c-540b-45f9-abd1-a12605ecfd8d.JPG)
![queue-notification](https://user-images.githubusercontent.com/102617431/187005530-8186d956-fbe0-42ca-9847-a3a10f5e867a.JPG)


<br><br>
##Yomna Sherif Ahmed
1.user have a profile
<br>
2.user can add image,bio and website to his profile through update button
<br>
3.user can update update his profile like name,username,phone,email,website,bio,avatar and password
<br>
4.name,username,password,phone and email are required
<br>
5.website and bio are nullable
<br>
6.image is shown in index after updating user profile
<br>
7.updated image is shown in user's profile
<br>
8.website and bio are show after update because default is null
<br>
9.you can view followers list ,following list and people on instagram with button showing their status , it is shown in follower list a button to show if you are following him or if not then follow and remove link(link not working just a view)  
<br>
10.if you don't have followers than it is shown as a message
<br>
11.in following list ,the following button is show if you are following someone.
<br>
12.the following and follow button are shown with profile image and name
<br>
13.people on instgram list with follow,following status button
<br>
14.you can count posts,followers and following
<br>
15.you can use seed to create accounts 
<br>
![index](https://user-images.githubusercontent.com/102757176/187006814-5ae3c121-7d8f-4c99-a0e1-c39b44c942e9.png)
![update1](https://user-images.githubusercontent.com/102757176/187006830-ccdd0fa6-7c74-4522-8cef-681f3d9343e2.png)
![update2](https://user-images.githubusercontent.com/102757176/187006836-3a9de081-d33e-47f3-b0f6-0ebde0da2406.png)
![update3](https://user-images.githubusercontent.com/102757176/187006841-aa276e77-65d3-4992-84a8-725a2b4b032b.png)
![update4](https://user-images.githubusercontent.com/102757176/187006846-81133ace-13a4-40ce-bb52-d23d51995e82.png)
![Successful update](https://user-images.githubusercontent.com/102757176/187006851-3afb0412-fb28-48c7-b6f2-df39a6e1b1ec.png)
![peopleoninstagram](https://user-images.githubusercontent.com/102757176/187006873-77eba4de-5c10-4f53-a340-af05dafc8c34.png)
![peopleoninstagram2](https://user-images.githubusercontent.com/102757176/187006904-d4dba512-df68-48d8-868c-1e090f14fb0f.png)
![postscount](https://user-images.githubusercontent.com/102757176/187006913-b4efca7a-24b1-4fc6-b057-3787c914c9eb.png)
![followers](https://user-images.githubusercontent.com/102757176/187006917-98180e43-52f6-42c2-9ad5-28f3a08320fc.png)
![following](https://user-images.githubusercontent.com/102757176/187006921-ee8a1586-db53-4559-9fbd-dc444c88ece7.png)
