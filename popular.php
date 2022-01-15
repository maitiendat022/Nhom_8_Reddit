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
    <link rel="stylesheet" href="css/popular.css" />
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
  </head>
  <body class="overflow-scroll">
    
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
              <i class="bi bi-arrow-up-right-circle-fill popular"></i>
              <span class="text">Popular</span>
              <i class="bi bi-chevron-down ms-auto"></i>
            </button>
            <div role="menu" class="home-bt" id="home-bt">
              <input type="text" placeholder="Filter">
              <div class="home-bt-menu">
                <div>FEEDS</div>
                <a href="home.php">
                  <i class="bi bi-house-door"></i>
                  <span>Home</span>
                </a>
                <a href="popular.php">
                  <i class="bi bi-arrow-up-right-circle-fill"></i>
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
                  <img src="img/user_img/<?php 
                              if($rowUser['avatar'] == 0){
                                echo 'R.jpg';
                              }
                              else{
                                echo $rowUser['avatar'];
                              }
                    ?>" alt="">
                  <span>User Settings</span>
                </a>
                <a href="">
                  <img src="img/user_img/<?php 
                              if($rowUser['avatar'] == 0){
                                echo 'R.jpg';
                              }
                              else{
                                echo $rowUser['avatar'];
                              }
                    ?>" alt="">
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
                  <img src="img/recap.png" alt="">
                  <span>Reddit Recap</span>
                </a>
                <a href="">
                  <i class="bi bi-record-circle"></i>
                  <span>Talk</span>
                </a>
                <a href="">
                  <span class="material-icons pre">
                    travel_explore
                    </span>
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
            <a href="all.html">
              <i class="bi bi-filter-circle"></i>
            </a><a href="">
              <i class="bi bi-camera-video"></i>
            </a>
            <a href="">
              <img src="img/recap.png" alt="">
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
                <button>
                  <a style = "color:rgb(28,28,28)" href="createPost.php"><i class="bi bi-plus"></i></a>
                </button>
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
                      <img src="img/user_img/<?php 
                              if($rowUser['avatar'] == 0){
                                echo 'R.jpg';
                              }
                              else{
                                echo $rowUser['avatar'];
                              }
                    ?>" alt="">
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
                    <img src="img/recap.png" alt="">
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
                    <span class="material-icons">
                      travel_explore
                      </span>
                    <div>Predictions</div>
                  </a>
                  <a class="icon" href="">
                    <span class="material-icons">
                      help_outline
                      </span>
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
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div id="main">
        <div class="main">
          <div class="main-top">
            <div class="trending-p">
              <div>Trending today</div>
            </div>

            <div class="trending">
              <div class="card card-1" style="width: 18rem">
                <a
                  href="https://www.reddit.com/search?q=Ukraine&source=trending"
                >
                  <div class="trending-1">
                    <div class="trending-1a">
                      <div class="noi-dung">
                        <div class="nd-1">
                          <h2 class="h2">Ukraine</h2>
                          <div class="text">
                            Russian mercenaries deploy to eastern Ukraine -
                            sources
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="card" style="width: 18rem; margin-left: 12px">
                <a
                  href="https://www.reddit.com/search?q=Hong%20Kong&source=trending"
                >
                  <div class="trending-2">
                    <div class="trending-2a">
                      <div class="noi-dung">
                        <div class="nd-1">
                          <h2 class="h2">Hong Kong</h2>
                          <div class="text">
                            University of Hong Kong appears to demolish...
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="card" style="width: 18rem; margin-left: 12px">
                <a
                  href="https://www.reddit.com/search?q=Student%20Loans&source=trending"
                >
                  <div class="trending-3">
                    <div class="trending-3a">
                      <div class="noi-dung">
                        <div class="nd-1">
                          <h2 class="h2">Student Loans</h2>
                          <div class="text">
                            Pause on student loan payments is extended
                            through...
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="card" style="width: 18rem; margin-left: 12px">
                <a
                  href="https://www.reddit.com/search?q=James%20Webb&source=trending"
                >
                  <div class="trending-4">
                    <div class="trending-4a">
                      <div class="noi-dung">
                        <div class="nd-1">
                          <h2 class="h2">James Webb Telescope</h2>
                          <div class="text">
                            NASA's 'trailer' for the James Webb telescope. I
                            gotta say...
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="main-bt">
        <div class="main-bt-left">
          <div class="popular">
            <div class="popular-text">
              <div>Popular posts</div>
            </div>
            <div class="popular-main">
              <div class="popular-main-left">
                <a href="http://www.reddit.com/hot/" class="hot">
                  <i class="fas fa-burn"></i>
                  <span>Hot</span>
                </a>

                <div class="everywhere">
                  <button>
                    <span>Everywhere</span>
                    <i class="bi bi-chevron-down"></i>
                  </button>
                </div>

                <div class="new">
                  <a href="">
                    <i class="bi bi-gear-wide"></i>
                    <span>New</span>
                  </a>
                </div>

                <div class="top">
                  <a href="">
                    <span class="material-icons"> leaderboard </span>
                    <span class="sp-top">Top</span>
                  </a>
                </div>
              </div>

              <div class="popular-main-right">
                <div class="menu">
                  <button>
                    <i class="bi bi-three-dots"></i>
                  </button>
                </div>
                <div class="menu-car">
                  <button>
                    <span class="material-icons"> view_agenda </span>
                    <i class="bi bi-chevron-down"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div>
            <?php
            
              $sql = "SELECT * FROM postreddit";

              $result = mysqli_query($connect,$sql);
              
              if(mysqli_num_rows($result) >0){ while($row = mysqli_fetch_assoc($result)){ 
              ?>
            <div class="posts-1">
              <div class="posts-left">
                <div class="posts-left-1">
                  <button class="up">
                    <i class="bi bi-arrow-up-square"></i>
                  </button>
                  <span><?php echo $row['likes'] ?></span>
                  <button class="down">
                    <i class="bi bi-arrow-down-square"></i>
                  </button>
                </div>
              </div>
              <div class="posts-main">
                <div class="posts-main-top">
                  <span>Posted by</span>
                  <span><?php echo $row["nameUser"] ?></span>
                  <?php 
                              date_default_timezone_set("Asia/Ho_Chi_Minh");
                              $timenow = date('Y-m-d H:i:s');
                              $timeupload = $row['timeupload'];
                              $time1 = strtotime($timenow);
                              $time2 = strtotime($timeupload);
                              $seconds = abs($time1-$time2);
                              $mins = ceil($seconds/60);
                              $hour = floor($seconds/60/60);
                              $days = floor($seconds/60/60/24);
                              
                              if($hour<1){
                                echo "<span style = 'magin-left:5px;'>$mins mins ago</span>";
                              }else{
                                if($hour<24){
                                  echo "<span style = 'magin-left:5px;'>$hour hours ago</span>";
                                }else{
                                  echo "<span style = 'magin-left:5px;'>$days days ago</span>";
                                }
                              }   
                          ?>
                </div>
                
                <div class="posts-main-bw">
                  <h5><?php echo nl2br($row['title']) ?></h5>
                  <span class= "content"><?php echo nl2br($row['content']) ?></span>
                  <div class="img">
                      <!-- <img
                        src="img/post_img/<?php echo $row['img']; ?>"
                        alt=""
                      /> -->
                      <?php
                        if( $row['img'] !== ""){
                          echo "<img src = 'img/post_img/{$row['img']}' />";
                        }
                      ?>
                    </div>
                    
                    <div class="video">
                      <!-- <video src=""></video> -->
                      <?php
                        if($row['video'] !== ""){
                          echo "<video controls src = 'video/{$row['video']}'></video>";
                        }
                      ?>
                    </div>
                  <div class="link">
                    <a href="index.html">
                      <span></span>
                    </a>
                  </div>
                </div>
                <div class="posts-main-bt">
                  <a href="">
                    <i class="bi bi-chat-square"></i>
                    <span>0k Comments</span>
                  </a>
                  <button>
                    <i class="bi bi-arrow-90deg-right"></i>
                    <span>Share</span>
                  </button>
                  <button>
                    <i class="bi bi-bookmark"></i>
                    <span>Save</span>
                  </button>
                  <button><i class="bi bi-three-dots"></i></button>
                </div>
              </div>
            </div>
            <?php
                }
              }
            ?>
          </div>
        </div>
        <div class="main-bt-right">
          <div class="top-news">
            <div class="top">
              <div class="top-bg">
                <h2 class="h2">
                  <a href="">Top News Communities</a>
                </h2>
              </div>
            </div>
            <ol class="ol">
              <li>
                <div class="li-1">
                  <span>1</span>
                  <i class="bi bi-chevron-up"></i>
                  <img
                    src="img/E0Bkwgwe5TkVLflBA7WMe9fMSC7DV2UOeff-UpNJeb0.png"
                    alt=""
                  />
                  <span>r/news</span>
                </div>
                <button class="ms-auto">join</button>
              </li>
              <li>
                <div class="li-1">
                  <span>2</span>
                  <i class="bi bi-chevron-down i-down"></i>
                  <img src="img/li-2.png" alt="" />
                  <span>r/nottheonion</span>
                </div>
                <button class="ms-auto">join</button>
              </li>
              <li>
                <div class="li-1">
                  <span>3</span>
                  <i class="bi bi-chevron-up"></i>
                  <img src="img/li-3.PNG" alt="" />
                  <span>r/worldnews</span>
                </div>
                <button class="ms-auto">join</button>
              </li>
              <li>
                <div class="li-1">
                  <span>4</span>
                  <i class="bi bi-chevron-up"></i>
                  <img src="img/li-4.png" alt="" />
                  <span>r/savedyouaclick</span>
                </div>
                <button class="ms-auto">join</button>
              </li>
              <li>
                <div class="li-1">
                  <span>5 </span>
                  <i class="bi bi-chevron-up"></i>
                  <img src="img/li-5.jpg" alt="" />
                  <span>r/olympics</span>
                </div>
                <button class="ms-auto">join</button>
              </li>
            </ol>
            <div class="view-all">
              <a href="">View All</a>
            </div>
            <div class="top-news-bt">
              <a href="">Top</a>
              <a href="">Near You</a>
              <a href="">Aww</a>
              <a href="">Sports</a>
            </div>
          </div>

          <div class="rd-pr">
            <div class="rd-pr-top">
              <img src="img/rd-pr.PNG" alt="" />
              <div class="rd-pr-text">
                <span class="span-1">Reddit Premium</span>
                <span>The best Reddit experience, with monthly Coins</span>
              </div>
            </div>
            <div class="try">
              <button>Try Now</button>
            </div>
          </div>

          <div class="menu">
            <div class="menu-1">
              <div>POPULAR COMMUNITIES</div>
              <i class="bi bi-chevron-down ms-auto"></i>
            </div>
            <div class="menu-1">
              <div>GAMING</div>
              <i class="bi bi-chevron-down ms-auto"></i>
            </div>
            <div class="menu-1">
              <div>SPORTS</div>
              <i class="bi bi-chevron-down ms-auto"></i>
            </div>
            <div class="menu-1">
              <div>TV</div>
              <i class="bi bi-chevron-down ms-auto"></i>
            </div>
            <div class="menu-1">
              <div>TRAVEL</div>
              <i class="bi bi-chevron-down ms-auto"></i>
            </div>
            <div class="menu-1">
              <div>HEALTH & FITNESS</div>
              <i class="bi bi-chevron-down ms-auto"></i>
            </div>
            <div class="menu-2">
              <div>FASHION</div>
              <i class="bi bi-chevron-down ms-auto"></i>
            </div>
          </div>
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
