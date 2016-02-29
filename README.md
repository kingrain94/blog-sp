Base on Yii2 PHP framework and AdminLTE bootstrap template

Blog manager website!
===============================

First, you must login or register a new account for blog writing.
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/login.PNG)
You can change your profile.
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/profile.PNG)
The timeline page to show newest post.
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/timeline.PNG)
You can create your new post.
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/vietbai.PNG) 
and review your old post.
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/baiviet.PNG)
You can find friend and send a friend request, or send a message to other people
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/friend's%20timeline.PNG)
and review your friend's list
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/friend.PNG)
You can add a event to your schedule and view it on time table.
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/lichlamviec.PNG)
You can review your inbox
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/tinnhan.PNG)
or compose a new message
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/soantin.PNG)
to logout click on the right corner above.
![alt tag](https://github.com/kingrain94/yii2adv-blog/blob/master/intro/image/log%20out.PNG)


DIRECTORY STRUCTURE
-------------------
```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```
