<?php
  function route($route_name, $params = []){
    global $app_url;
    switch ($route_name){
      case 'home':            return $app_url; break;
      #region BLOG
      case 'blog.feed.index': return $app_url."/"."blog"; break;
      case 'blog.feed.show':  return $app_url."/"."blog/".$params['slug']; break;
      case 'blog.feed.more':  return $cms_url."api/post/feed/".($params['skip'] ?? ''); break;
      #endregion BLOG
      #region API ROUTES
      case 'api.comment.show':    return ""; break;
      case 'api.comment.answers': return ""; break;
      case 'api.comment.delete':  return ""; break;
      case 'api.comment.store':   return ""; break;

      case 'api.postlead.like':   return ""; break;
      case 'api.postlead.store':  return ""; break;
      case 'api.postlead.login':  return ""; break;
      #endregion API ROUTES
    }
    throw new Error("Route $route_name don't exists");
  }