<?php
  session_start();
  if(!isset($_SESSION['isLogInOk'])){
    header("location: index.php");
  }
  $user = $_SESSION['isLogInOk'];
  $connect = mysqli_connect('localhost','root','','reddit');
  $sqlUser = "SELECT * FROM userreddit WHERE (nameUser = '$user')" ;
  $resultUser = mysqli_query($connect,$sqlUser);
  $rowUser = mysqli_fetch_assoc($resultUser);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reddit</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/createPost.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Icons"
    />
    <link
      rel="shortcut icon"
      href="https://www.redditstatic.com/desktop2x/img/favicon/favicon-32x32.png"
      type="image/x-icon"
    />
    <script src = "js/jquery-3.6.0.min.js"></script>
    <script src = "js/createPost.js"></script>
    <script src = "js/avatar.js"></script>
  </head>
  <body class="overflow-scroll" id="body">
    <header>
      <div id="header">
        <div class="h-left">
          <a href="index.html">
            <img src="img/reddit-logo-2.png" alt="" class="rd_logo" />
          </a>
        </div>
        <div class="h-home">
          <div class="home" id="home">
            <button id="homebt">
              <i class="bi bi-plus-lg home-icon"></i>
              <span class="text">Create Post</span>
              <i class="bi bi-chevron-down ms-auto"></i>
            </button>
            <div role="menu" id="home-bt" class="home-bt">
              <input type="text" placeholder="Filter" />
              <div class="home-bt-menu">
                <div>FEEDS</div>
                <a href="home.php">
                  <i class="bi bi-house-door"></i>
                  <span>Home</span>
                </a>
                <a href="popular.php">
                  <i class="bi bi-arrow-up-right-circle"></i>
                  <span>Popular</span>
                </a>
                <a href="all.php">
                  <i class="bi bi-filter-circle"></i>
                  <span>All</span>
                </a>
                <a href="">
                  <i class="bi bi-camera-video"></i>
                  <span>Reddit Live</span>
                </a>
                <div>OTHER</div>
                <a href="">
                  <img
                    src="img/user_img/<?php 
                              if($rowUser['avatar'] == 0){
                                echo 'R.jpg';
                              }
                              else{
                                echo $rowUser['avatar'];
                              }
                    ?>"
                    alt=""
                  />
                  <span>User Settings</span>
                </a>
                <a href="">
                  <img
                    src="img/user_img/<?php 
                              if($rowUser['avatar'] == 0){
                                echo 'R.jpg';
                              }
                              else{
                                echo $rowUser['avatar'];
                              }
                    ?>"
                    alt=""
                  />
                  <span>Messages</span>
                </a>
                <a href="createPost.php">
                  <i class="bi bi-plus-lg"></i>
                  <span>Create Post</span>
                </a>
                <a href="">
                  <i class="bi bi-list-ol"></i>
                  <span>Top Communities</span>
                </a>
                <a href="">
                  <i class="bi bi-bell"></i>
                  <span>Notification</span>
                </a>
                <a href="">
                  <i class="bi bi-coin"></i>
                  <span>Coins</span>
                </a>
                <a href="">
                  <i class="bi bi-shield-plus"></i>
                  <span>Premium</span>
                </a>
                <a href="">
                  <i class="bi bi-lightning"></i>
                  <span>Avatar</span>
                </a>
                <a href="">
                  <i class="bi bi-snapchat"></i>
                  <span>Powerups</span>
                </a>
                <a href="">
                  <img src="img/recap.png" alt="" />
                  <span>Reddit Recap</span>
                </a>
                <a href="">
                  <i class="bi bi-record-circle"></i>
                  <span>Talk</span>
                </a>
                <a href="">
                  <span class="material-icons pre"> travel_explore </span>
                  <span>Predictions</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="h-search">
          <form action="">
            <label for=""><i class="bi bi-search"></i></label>
            <input
              type="text"
              class="bi bi-search"
              placeholder="Search reddit"
            />
          </form>
        </div>
        <div class="h-right">
          <div class="h-right-l">
            <a href="popular.html">
              <i class="bi bi-arrow-up-right-circle"></i>
            </a>
            <a href="all.html"> <i class="bi bi-filter-circle"></i> </a
            ><a href="">
              <i class="bi bi-camera-video"></i>
            </a>
            <a href="">
              <img src="img/recap.png" alt="" />
            </a>
          </div>
          <div class="h-right-r">
            <div class="notification">
              <span class="span-1">
                <a href="">
                  <i class="bi bi-chat-dots"></i>
                </a>
              </span>
              <span class="span-2">
                <button>
                  <i class="bi bi-bell"></i>
                </button>
              </span>
              <span class="span-3">
                <a href="createPost.php">
                  <button>
                    <i class="bi bi-plus"></i>
                  </button>
                </a>
              </span>
              <span class="coins">
                <button>
                  <div>
                    <i class="bi bi-coin"></i>
                    <span>Free</span>
                  </div>
                </button>
              </span>
            </div>
            <div class="user" id="user">
              <button id="user-btn">
                <span class="avt-name">
                  <span>
                    <div class="avt">
                      <img
                        src="img/user_img/<?php 
                              if($rowUser['avatar'] == 0){
                                echo 'R.jpg';
                              }
                              else{
                                echo $rowUser['avatar'];
                              }
                    ?>"
                        alt=""
                      />
                    </div>
                  </span>
                  <span class="names">
                    <span class="name"><?php echo $user ?></span>
                    <span class="karma">
                      <i class="bi bi-flower1"></i>
                      <span>1 karma</span>
                    </span>
                  </span>
                </span>
                <i class="bi bi-chevron-down ms-auto down"></i>
              </button>
              <!--  -->
              <div id="menu-profile">
                <div class="menu">
                  <h3>ONLINE STATUS</h3>
                  <button class="bt">
                    <div>On</div>
                    <div class="form-check form-switch ms-auto">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        id="flexSwitchCheckDefault"
                      />
                    </div>
                  </button>
                  <h3>MY STUFF</h3>
                  <a class="recap" href="">
                    <img src="img/recap.png" alt="" />
                    <p>Reddit Recap</p>
                    <p class="text-new ms-auto">NEW!</p>
                  </a>
                  <a href="profile.php">
                    <i class="bi bi-person-circle"></i>
                    <div>Profile</div>
                  </a>
                  <button>
                    <i class="bi bi-plus-lg"></i>
                    <span>Create Avatar</span>
                  </button>
                  <a href="">
                    <i class="bi bi-gear"></i>
                    <div>User Settings</div>
                  </a>
                  <h3>VIEW OPTIONS</h3>
                  <button class="bt">
                    <div class="nm">
                      <i class="bi bi-moon"></i>
                      <div>Night Mode</div>
                    </div>
                    <div class="form-check form-switch ms-auto">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        id="flexSwitchCheckDefault"
                      />
                    </div>
                  </button>
                  <h3>MORE STUFF</h3>
                  <button>
                    <i class="bi bi-slash-circle"></i>
                    <div>Create a Community</div>
                  </button>
                  <a class="coin" href="">
                    <i class="bi bi-coin"></i>
                    <div>
                      <span>Coins</span>
                      <span class="coins">0 coins</span>
                    </div>
                  </a>
                  <a href="">
                    <i class="bi bi-shield-plus"></i>
                    <div>Premium</div>
                  </a>
                  <a>
                    <i class="bi bi-lightning"></i>
                    <div>Powerups</div>
                  </a>
                  <a href="">
                    <i class="bi bi-record-circle"></i>
                    <div>Talk</div>
                  </a>
                  <a class="icon" href="">
                    <span class="material-icons"> travel_explore </span>
                    <div>Predictions</div>
                  </a>
                  <a class="icon" href="">
                    <span class="material-icons"> help_outline </span>
                    <div>Help Center</div>
                  </a>
                  <a href="">
                    <i class="bi bi-box-arrow-up-right"></i>
                    <div>Visit Old Reddit</div>
                  </a>
                  <a href="log-out.php">
                    <i class="bi bi-box-arrow-in-right log-out"></i>
                    <div>Log Out</div>
                  </a>
                </div>
              </div>

              <!--  -->
            </div>
          </div>
        </div>
      </div>
    </header>


    <main>
      <div id="main-bt">
        <div class="main-bt-left">
            <div class = "text-cap">
                Create a post
            </div>
            
            
            <form action="post.php"  method="post" enctype="multipart/form-data" class="form-post">
               
                <div class="user-post">
                  <div class="">
                    <img src="img/user_img/<?php 
                              if($rowUser['avatar'] == 0){
                                echo 'R.jpg';
                              }
                              else{
                                echo $rowUser['avatar'];
                              }
                    ?>" alt="">
                    <span ><?php echo $user; ?></span>
                    <input style = "display:none;" name = "user" id="user" type="text" value = "<?php echo $user; ?>">
                    <i class="bi bi-chevron-down ms-auto"></i>
                  </div>
                </div>
                <div class="main-post">
                  <div class="text-post">
                    <i class="bi bi-receipt"></i>
                    <span>Post</span>
                  </div> 
                  <div class="main-post-ct">
                    <div class="title-post">
                      <label for="title-post">
                        <textarea maxlength="300" placeholder = "Title"  name="title" id="title" cols="30" rows="1"></textarea>
                      </label>
                    </div>
                    <div class="main-content">
                      <div class= "icons">
                        <label class="form-label fs-4 d-block" for="img-post">
                          <i class="bi bi-image"></i>
                        </label>
                        <input  type="file" hidden accept = "image/*" id="img-post" name="img" onchange="document.getElementById('img_post').src = window.URL.createObjectURL(this.files[0])" class="form__input form-control form-control-lg"/>
                        <label class="form-label fs-4 d-block" for="video-post">
                          <i class="bi bi-play-circle"></i>
                        </label>
                        <input  type="file" hidden accept = "video/*" id="video-post" name="video" onchange="document.getElementById('video_post').src = window.URL.createObjectURL(this.files[0])" class="form__input form-control form-control-lg"/>
                      </div>
                      <div class="content">
                        <textarea placeholder="Title(optional)" name="content" id="" cols="30" rows="8"></textarea>
                        <img id="img_post"/>
                        <video controls id="video_post" src="" frameborder="0"></video>
                      </div>
                    </div>
                    <hr>
                    <div class="btnPost">
                        <button disabled id ="btnPost" name="btnPost" class="ms-auto">POST</button>
                      
                    </div>
                  </div>
                </div>
            </form>
        
          
        </div>
        <div class="main-bt-right">
          <div id = "user-info">
            <div class = "info-top">
              <form class="img-user" method = "post" action = "process-avatar.php" enctype="multipart/form-data" >
                <label class="form-label fs-4 d-block" for="img-user">
                  <div class="imgs">
                    <div class="img">
                      <img id="img_user" src="img/user_img/<?php 
                              if($rowUser['avatar'] == 0){
                                echo 'R.jpg';
                              }
                              else{
                                echo $rowUser['avatar'];
                              }
                    ?>" alt="">
                    </div>
                    <div class="icon">
                      <i class="bi bi-camera"></i>
                    </div>
                  </div>
                </label>
                <input style = "display:none;" name = "userAvt" id="userAvt" type="text" value = "<?php echo $user; ?>">
                <input  type="file" hidden accept = "image/*" id="img-user" name="imgAvatar" 
                    onchange="document.getElementById('img_user').src = window.URL.createObjectURL(this.files[0])" 
                    class="form__input form-control form-control-lg"/>
                <div class="modal mt-5" id ="save-Avt" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Change Avatar</h5>
                      </div>
                      <div class="modal-body">
                        <p>Do you agree to change? </p>
                      </div>
                      <div class="modal-footer">
                        <a href=""><button type="button">Cancal</button></a>
                        <button type="submit" class = "btnAvatar" name = "btnAvatar" >Save</button>
                      </div>
                    </div>
                  </div>
                </div>  
              </form>
              <div class= "name-user">
                <span> <?php echo $user ?> </span>
                <i class="bi bi-gear ms-auto"></i>
              </div>
            </div>
            <button class = "cr-avt">Create Avatar</button>
            <div class = "info-bt">
              <div class = "karma">
                <span>karma</span>
                <div class="a"><i class="bi bi-flower1"></i><span>1</span></div>
              </div>
              <div class = "cake-day ms-auto">
                <span>Cake day</span>
                <div class="a">
                  <i class="bi bi-credit-card-2-front"></i>
                  <span><?php echo $rowUser['daycreate'] ?></span>
                </div>
              </div>
            </div>
            <button class = "options ms-auto">More Options</button>
            
          </div>
          <!--  -->
          <div id = "post-rules">
            <div class= "img">
              <img src="img/rules.PNG" alt="">
              <span>Posting to Reddit</span>
            </div>
            <div class = "rule">
              <div>1. Remember the human</div>
              <div>2. Behave like you would in real life</div>
              <div>3. Look for the original source of content</div>
              <div>4. Search for duplicates before posting</div>
              <div>5. Read the community's rules</div>
            </div>
          </div>


          <!--  -->
          <div class="about">
            <div class="about-top">
              <div class="about-1">
                <span>Help</span>
                <span>Reddit coins</span>
                <span>Reddit premium</span>
                <span>Reddit gifts</span>
                <span>Communities</span>
                <span>Rereddit</span>
                <span>Topics</span>
              </div>
              <div class="about-1">
                <span>About</span>
                <span>Careers</span>
                <span>Press</span>
                <span>Advertise</span>
                <span>Blog</span>
                <span>Terms</span>
                <span>Content policy</span>
                <span>Privacy policy</span>
                <span>Mod policy</span>
              </div>
            </div>
            <div class="about-bot">
              <span>Reddit Inc © 2021 . All rights reserved</span>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="js/css.js"></script>
  </body>
</html>
