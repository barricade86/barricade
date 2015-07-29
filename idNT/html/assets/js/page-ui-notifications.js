var App = (function () {

  App.uiNotifications = function( ){
    'use strict'

    $('#not-basic').click(function(){
      $.gritter.add({
        title: 'Thomas new msg!',
        text: "You have a new Thomas message, let's checkout your inbox.",
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/avatar1_50.jpg',
        time: ''
      });
      return false;
    });
    
    $('#not-theme').click(function(){
      $.gritter.add({
        title: 'Welcome home!',
        text: 'You can start your day checking the new messages.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/clipboard_icon.png',
        class_name: 'clean',
        time: ''
      });
      return false;
    });
    
    $('#not-sticky').click(function(){
      $.gritter.add({
        title: 'Sticky Note',
        text: "Your daily goal is 130 new code lines, don't forget to update your work.",
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/blueprint_icon.png',
        class_name: 'clean',
        sticky: true, 
        time: ''
      });
      return false;
    });
    
    $('#not-text').click(function(){
      $.gritter.add({
        title: 'Just Text',
        text: 'This is a simple Gritter Notification.',
        class_name: 'clean',
        time: ''
      });
      return false;
    });
      
    
    /*Positions*/
    $('#not-tr').click(function(){
      $.extend($.gritter.options, { position: 'top-right' });

      $.gritter.add({
        title: 'Top Right',
        text: 'This is a simple Gritter Notification.',
        class_name: 'clean'
      });

      return false;
    });
    
    $('#not-tl').click(function(){
      $.extend($.gritter.options, { position: 'top-left' });

      $.gritter.add({
        title: 'Top Left',
        text: 'This is a simple Gritter Notification.',
        class_name: 'clean'
      });

      return false;
    });
    
    $('#not-bl').click(function(){

      $.extend($.gritter.options, { position: 'bottom-left' });

      $.gritter.add({
        title: 'Bottom Left',
        text: 'This is a simple Gritter Notification.',
        class_name: 'clean'
      });

      return false;
    });
    
    $('#not-br').click(function(){

      $.extend($.gritter.options, { position: 'bottom-right' });
      
      $.gritter.add({
        title: 'Bottom Right',
        text: 'This is a simple Gritter Notification.',
        class_name: 'clean'
      });

      return false;
    });
    
    
    
    /*Social Gritters*/
    $('#not-facebook').click(function(){
      $.gritter.add({
        title: 'You have comments!',
        text: 'You can start your day checking the new messages.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/fb-icon.png',
        class_name: 'facebook'
      });
      return false;
    });
    
    $('#not-twitter').click(function(){
      $.gritter.add({
        title: 'You have new followers!',
        text: 'You can start your day checking the new messages.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/tw-icon.png',
        class_name: 'twitter'
      });
      return false;
    });
    
    $('#not-google-plus').click(function(){
      $.gritter.add({
        title: 'You have new +1!',
        text: 'You can start your day checking the new messages.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/gp-icon.png',
        class_name: 'google-plus'
      });
      return false;
    });
    
    $('#not-dribbble').click(function(){
      $.gritter.add({
        title: 'You have new comments!',
        text: 'You can start your day checking the new comments.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/db-icon.png',
        class_name: 'dribbble'
      });
      return false;
    });
    
    $('#not-flickr').click(function(){
      $.gritter.add({
        title: 'You have new comments!',
        text: 'You can start your day checking the new comments.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/fl-icon.png',
        class_name: 'flickr'
      });
      return false;
    });
    
    $('#not-linkedin').click(function(){
      $.gritter.add({
        title: 'You have new comments!',
        text: 'You can start your day checking the new comments.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/in-icon.png',
        class_name: 'linkedin'
      });
      return false;
    });
    
    $('#not-youtube').click(function(){
      $.gritter.add({
        title: 'You have new comments!',
        text: 'You can start your day checking the new comments.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/yt-icon.png',
        class_name: 'youtube'
      });
      return false;
    });
    
    $('#not-pinterest').click(function(){
      $.gritter.add({
        title: 'You have new comments!',
        text: 'You can start your day checking the new comments.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/pi-icon.png',
        class_name: 'pinterest'
      });
      return false;
    });  
    
    $('#not-github').click(function(){
      $.gritter.add({
        title: 'You have new forks!',
        text: 'You can start your day checking the new comments.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/gh-icon.png',
        class_name: 'github'
      });
      return false;
    });    
    
    $('#not-tumblr').click(function(){
      $.gritter.add({
        title: 'You have new comments!',
        text: 'You can start your day checking the new comments.',
        image: App.conf.assetsPath + '/' +  App.conf.imgPath + '/tu-icon.png',
        class_name: 'tumblr'
      });
      return false;
    });
    
    /*Colors*/
    $('#not-primary').click(function(){
      $.gritter.add({
        title: 'Primary',
        text: 'This is a simple Gritter Notification.',
        class_name: 'primary'
      });
    });
    
    $('#not-success').click(function(){
      $.gritter.add({
        title: 'Success',
        text: 'This is a simple Gritter Notification.',
        class_name: 'success'
      });
    });
    
    $('#not-info').click(function(){
      $.gritter.add({
        title: 'Info',
        text: 'This is a simple Gritter Notification.',
        class_name: 'info'
      });
    });
    
    $('#not-warning').click(function(){
      $.gritter.add({
        title: 'Warning',
        text: 'This is a simple Gritter Notification.',
        class_name: 'warning'
      });
    });
    
    $('#not-danger').click(function(){
      $.gritter.add({
        title: 'Danger',
        text: 'This is a simple Gritter Notification.',
        class_name: 'danger'
      });
    });
    
    
    $('#not-dark').click(function(){
      $.gritter.add({
        title: 'Dark',
        text: 'This is a simple Gritter Notification.',
        class_name: 'dark'
      });
    });
    
  };

  return App;
})(App || {});
