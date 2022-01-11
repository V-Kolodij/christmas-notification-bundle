# Hello ChristmasNotificationBundle!

ChristmasNotification is a way for you to send congratulations using different ways.
Install the package with:
```console
composer require valdemar/christmas-notification-bundle --dev
```
Don't forget create christmas_notification_yaml with message which you want to send: 
```
christmas_notification:
  message: "Happy New Year!"
```
And add Notification Transport which implements ChristmassNotificationTransportInterface and enjoy!