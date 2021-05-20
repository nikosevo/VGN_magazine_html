<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VGN | new article</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<link rel="stylesheet" href="css/flashyButton.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/createPost.css">
	<link rel="stylesheet" href="css/input.css">

</head>
<body>
    <header>
		<?php 
        include("navbar.html"); 
        ?>
	</header>
    <!-- we add the function to the action an we are done...well after we do all the checks and stuff-->
    <form action="newPost.php">
        <div class="container">
            <div class="textFields">
                <div class="form">
                    <input type="text" name="title" autocomplete="off" required />
                    <label for="name" class="label-name">
                        <span class="content-name">Title</span>
                    </label>
                </div>
                <div class="form">
                    <input type="text" name="description" autocomplete="off" required />
                    <label for="name" class="label-name">
                        <span class="content-name">description</span>
                    </label>
                </div>
                
                <div class="toolbar">
                    <ul class="tool-list">
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command='justifyLeft'
                                class="tool--btn">
                                <i class=' fas fa-align-left'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command='justifyCenter' 
                                class="tool--btn">
                                <i class=' fas fa-align-center'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="bold" 
                                class="tool--btn">
                                <i class=' fas fa-bold'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="italic"
                                class="tool--btn">
                                <i class=' fas fa-italic'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="underline"
                                class="tool--btn">
                                <i class=' fas fa-underline'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="insertOrderedList"
                                class="tool--btn">
                                <i class=' fas fa-list-ol'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="insertUnorderedList"
                                class="tool--btn">
                                <i class=' fas fa-list-ul'></i>
                            </button>
                        </li>
                        <li class="tool">
                            <button 
                                type="button" 
                                data-command="createlink" 
                                class="tool--btn">
                                <i class=' fas fa-link'></i>
                            </button>
                        </li>
                    </ul>
                </div>

                <div id="output" contenteditable="true"></div>
            </div>
            <div class="options">
                <input type="file" id="file" accept="image/*" name="image">
                <label for="file"><i class="fas fa-upload"></i></label>
                <select id="selectbox" data-selected="">
                    <option value="" selected="selected" disabled="disabled">Select a category</option>
                    <option value="1">sports</option>
                    <option value="2">fassion</option>
                    <option value="3">cars</option>
                    <option value="4">Cityscape</option>
                    <option value="5">Workshop</option>
                </select>
                <div class="btnWrap">
                    <button class="glow-on-hover" type="button" onclick="document.getElementById('form').submit();" style="width:14vw;margin-left:-5vw;">save changes</button>
                </div>
                
            </div>
        </div>
    </form>

    <script type="text/javascript" src="js/createPost.js"></script>"
    
</body>
</html>