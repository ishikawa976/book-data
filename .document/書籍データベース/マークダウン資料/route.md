ishikawa@ishikawa:~/book-data$ sail artisan route:list

  GET|HEAD        / ............................................................................................................................................................  
  GET|HEAD        book ....................................................................................................................... book.index › BookController@index  
  POST            book ....................................................................................................................... book.store › BookController@store  
  GET|HEAD        book/create .............................................................................................................. book.create › BookController@create  
  GET|HEAD        book/{book} .................................................................................................................. book.show › BookController@show  
  PUT|PATCH       book/{book} .............................................................................................................. book.update › BookController@update  
  DELETE          book/{book} ............................................................................................................ book.destroy › BookController@destroy  
  GET|HEAD        book/{book}/edit ............................................................................................................. book.edit › BookController@edit  
  GET|HEAD        confirm-password .................................................................................. password.confirm › Auth\ConfirmablePasswordController@show  
  POST            confirm-password .................................................................................................... Auth\ConfirmablePasswordController@store  
  GET|HEAD        dashboard .......................................................................................................................................... dashboard  
  POST            email/verification-notification ....................................................... verification.send › Auth\EmailVerificationNotificationController@store  
  GET|HEAD        forgot-password ................................................................................... password.request › Auth\PasswordResetLinkController@create  
  POST            forgot-password ...................................................................................... password.email › Auth\PasswordResetLinkController@store  
  GET|HEAD        login ..................................................................................................... login › Auth\AuthenticatedSessionController@create  
  POST            login .............................................................................................................. Auth\AuthenticatedSessionController@store  
  POST            logout .................................................................................................. logout › Auth\AuthenticatedSessionController@destroy  
  PUT             password .................................................................................................... password.update › Auth\PasswordController@update  
  GET|HEAD        profile ................................................................................................................ profile.edit › ProfileController@edit  
  PATCH           profile ............................................................................................................ profile.update › ProfileController@update  
  DELETE          profile .......................................................................................................... profile.destroy › ProfileController@destroy  
  GET|HEAD        register ..................................................................................................... register › Auth\RegisteredUserController@create  
  POST            register ................................................................................................................. Auth\RegisteredUserController@store  
  POST            reset-password ............................................................................................. password.store › Auth\NewPasswordController@store  
  GET|HEAD        reset-password/{token} .................................................................................... password.reset › Auth\NewPasswordController@create  
  GET|HEAD        storage/{path} ................................................................................................................................. storage.local  
  GET|HEAD        up ...........................................................................................................................................................  
  GET|HEAD        verify-email .................................................................................... verification.notice › Auth\EmailVerificationPromptController  
  GET|HEAD        verify-email/{id}/{hash} .................................................................................... verification.verify › Auth\VerifyEmailController 