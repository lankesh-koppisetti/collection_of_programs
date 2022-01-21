<div class="left_section">
    <div>
        <img src="images/twitericon.jpg" alt="icon" style="width:50px;"/>
    </div>
    <ul class="page_links">
        <li > 
            <i class="bi bi-house-fill"></i>
            <span>Home</span>
        </li>

        <li>  
            <i class="bi bi-hash"></i>
            <span>Explore</span>
        </li>
        <li>
            <i class="bi bi-bell"></i>
            <span>Notifications</span>
        </li>
        <li>
            <i class="bi bi-envelope"></i>
            <span>Messages</span>
        </li>
        <li> 
            <i class="bi bi-bookmark"></i>
            <span>Bookmarks</span>
        </li>
        <li> 
            <i class="bi bi-card-list"></i>
            <span>Lists</span>
        </li>
        <li>  
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </li>
        <li>
            <i class="bi bi-three-dots"></i>
            <span>More</span>
        </li>

    </ul>

    <div class="page_links">

    </div>
    <div class="page_links">

    </div>
    <div class="page_links">

    </div>


    <button class="btn btn-primary tweet_btn">
        Tweet
    </button>


    <div class="page_links profile_details d-flex flex-row justify-content-between" class="profile_details">
        <div class="d-flex flex-row">
            <img src="images/default_profile_pic.png" alt="profile_pic" class="default_img" />

            <div>     
                {{ Auth::user()->name }}
                <div class="text-gray-200">
                    <span>@</span>{{ Auth::user()->name }}
                </div>
            </div>
        </div>
        <div>.<i class="bi bi-three-dots"></i></div>
    </div> 
</div>