<?php include('header.html'); ?>

 <link rel="stylesheet" href="bar.css"> 

<div class="sam-bar-section">
        <h2 class="sam-our-bar-title">Our Bar</h2>

        <!-- Beer Section -->
        <h3>Beer</h3>
        <div class="carousel-container">
            <button class="carousel-button left" id="samLeftButton" onclick="samShowPrevious('beer')">&#10094;</button>
            <div class="carousel-wrapper">
                <div class="sam-carousel-items beer">
                    <div class="sam-carousel-item">
                        <img src="images/bar/bud light1.jpg" alt="Bud Light" data-hover="images/bar/bud light2.jpg">
                        <p>Bud Light</p>
                        <button class="learn-more" onclick="samOpenModal('modal1')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/coors1.jpg" alt="Coors" data-hover="images/bar/coors2.jpg">
                        <p>Coors</p>
                        <button class="learn-more" onclick="samOpenModal('modal2')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/corona1.jpg" alt="Corona" data-hover="images/bar/corona2.jpg">
                        <p>Corona</p>
                        <button class="learn-more" onclick="samOpenModal('modal3')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/heinken1.jpg" alt="Heineken" data-hover="images/bar/heinken2.jpg">
                        <p>Heineken</p>
                        <button class="learn-more" onclick="samOpenModal('modal4')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/stella1.jpg" alt="Stella" data-hover="images/bar/stella2.jpg">
                        <p>Stella</p>
                        <button class="learn-more" onclick="samOpenModal('modal5')">Learn More</button>
                    </div>
                </div>
            </div>
            <button class="carousel-button right" id="samRightButton" onclick="samShowNext('beer')">&#10095;</button>
        </div>

        <!-- Beer Modals -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal1')">&times;</span>
                <h2>Bud Light</h2>
                <p>Easy to drink, easy to enjoy. That’s what Bud Light and its simple, iconic 4 ingredient recipe has always stood for. With every moment and every beer, we strive to make life easier to enjoy.</p>
            </div>  
        </div>

        <div id="modal2" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal2')">&times;</span>
                <h2>Coors</h2>
                <p>We use pure water from ancient aquifers, deep lakes and Rocky Mountain springs to make a more refreshing beer. As a vital ingredient, we’re committed to leading water stewardship which is why we’ve partnered with our farmers to reduce water usage by as much as 25% while growing our high country Moravian barley.</p>
            </div>
        </div>

        <div id="modal3" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal3')">&times;</span>
                <h2>Corona</h2>
                <p>Corona Extra & Coronita: Refreshing, natural beers for socializing. Enjoyed chilled with a lime.</p>
            </div>
        </div>

        <div id="modal4" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal4')">&times;</span>
                <h2>Heineken</h2>
                <p>Wherever you go in the world, it’s always refreshing to see something you recognise. That green bottle, the red star, the smiling ‘e’… like an instant welcome from an old friend.</p>
            </div>
        </div>

        <div id="modal5" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal5')">&times;</span>
                <h2>Stella</h2>
                <p>Stella Artois is proud of our rich Belgian heritage. Stella Artois traces its origins to over 600 years ago, to the Den Hoorn brewery in Leuven, Belgium founded in 1366. Stella Artois was born as a Holiday gift to the people of Leuven, from the brewery.</p>
            </div>
        </div>

        <!-- Cocktails Section -->
        <h3>Cocktails</h3>
        <div class="carousel-container">
            <button class="carousel-button left" id="samLeftButtonCocktails" onclick="samShowPrevious('cocktails')">&#10094;</button>
            <div class="carousel-wrapper">
                <div class="sam-carousel-items cocktails">
                    <div class="sam-carousel-item">
                        <img src="images/bar/margarita1.jpg" alt="Margarita" data-hover="images/bar/margarita2.jpg">
                        <p>Margarita</p>
                        <button class="learn-more" onclick="samOpenModal('modal6')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/martini1.jpg" alt="Martini" data-hover="images/bar/martini2.jpg">
                        <p>Martini</p>
                        <button class="learn-more" onclick="samOpenModal('modal7')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/mojito1.jpg" alt="Mojito" data-hover="images/bar/mojito2.jpg">
                        <p>Mojito</p>
                        <button class="learn-more" onclick="samOpenModal('modal8')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/old fashioned1.jpg" alt="Old Fashioned" data-hover="images/bar/old fashioned2.jpg">
                        <p>Old Fashioned</p>
                        <button class="learn-more" onclick="samOpenModal('modal9')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/aperol1.jpg" alt="Aperol Spritz" data-hover="images/bar/aperol2.jpg">
                        <p>Aperol Spritz</p>
                        <button class="learn-more" onclick="samOpenModal('modal10')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/dark1.png" alt="Dark n Stormy" data-hover="images/bar/dark2.jpg">
                        <p>Dark n Stormy</p>
                        <button class="learn-more" onclick="samOpenModal('modal11')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/espresso1.jpg" alt="Espresso Martini" data-hover="images/bar/espresso2.jpg">
                        <p>Espresso Martini</p>
                        <button class="learn-more" onclick="samOpenModal('modal12')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/french1.jpg" alt="French 75" data-hover="images/bar/french2.jpg">
                        <p>French 75</p>
                        <button class="learn-more" onclick="samOpenModal('modal13')">Learn More</button>
                    </div>
                </div>
            </div>
            <button class="carousel-button right" id="samRightButtonCocktails" onclick="samShowNext('cocktails')">&#10095;</button>
        </div>

        <!-- Cocktail Modals -->
        <div id="modal6" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal6')">&times;</span>
                <h2>Margarita</h2>
                <p>A timeless classic that embodies the spirit of summer, the Margarita is a refreshing mix of tequila, lime juice, and triple sec, served in a salt-rimmed glass. First crafted in the 1930s, this cocktail became a symbol of carefree vacations and vibrant celebrations.</p>
            </div>
        </div>

        <div id="modal7" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal7')">&times;</span>
                <h2>Martini</h2>
                <p>The Martini is the ultimate cocktail of choice for those who appreciate style and class. Traditionally made with gin and dry vermouth, and garnished with either an olive or a lemon twist, this elegant drink is famous for its crisp, clean flavors.</p>
            </div>
        </div>

        <div id="modal8" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal8')">&times;</span>
                <h2>Mojito</h2>
                <p>The Mojito is a Cuban treasure that delivers a light, refreshing experience with every sip. Combining white rum, fresh mint, lime juice, sugar, and a splash of soda water, it’s the ultimate cooling cocktail.</p>
            </div>
        </div>

        <div id="modal9" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal9')">&times;</span>
                <h2>Old Fashioned</h2>
                <p>One of the oldest and most iconic cocktails, the Old Fashioned is the epitome of simplicity and elegance. Made with bourbon or rye whiskey, a sugar cube, a dash of bitters, and garnished with an orange peel, this cocktail has remained a staple since the early 19th century.</p>
            </div>
        </div>

        <div id="modal10" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal10')">&times;</span>
                <h2>Aperol Spritz</h2>
                <p>Light, bubbly, and oh-so-refreshing, the Aperol Spritz has become a staple of modern cocktail culture. Combining Aperol, Prosecco, and a splash of soda water, this vibrant orange drink is the perfect embodiment of “la dolce vita.”</p>
            </div>
        </div>

        <div id="modal11" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal11')">&times;</span>
                <h2>Dark 'n' Stormy</h2>
                <p>Bold and spicy, the Dark 'n' Stormy is a modern cocktail that packs a punch. Made with dark rum and ginger beer, and garnished with lime, this drink has a rich, warming flavor with a spicy kick from the ginger.</p>
            </div>
        </div>

        <div id="modal12" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal12')">&times;</span>
                <h2>Espresso Martini</h2>
                <p>A cocktail for coffee lovers, the Espresso Martini combines the bold flavor of freshly brewed espresso with the smooth kick of vodka and coffee liqueur. Shaken vigorously to create a silky froth, this modern classic is served chilled in a martini glass, offering a sophisticated twist on an evening pick-me-up.</p>
            </div>
        </div>

        <div id="modal13" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal13')">&times;</span>
                <h2>French 75</h2>
                <p>Elegant and effervescent, the French 75 is a modern take on classic sophistication. Made with gin, fresh lemon juice, sugar, and topped with Champagne, this cocktail offers a delightful combination of citrusy tartness and sparkling sweetness.</p>
            </div>
        </div>

        <!-- Vodka Section -->
        <h3>Vodka</h3>
        <div class="carousel-container">
            <button class="carousel-button left" id="samLeftButtonVodka" onclick="samShowPrevious('vodka')">&#10094;</button>
            <div class="carousel-wrapper">
                <div class="sam-carousel-items vodka">
                    <div class="sam-carousel-item">
                        <img src="images/bar/ciroc1.jpg" alt="Ciroc" data-hover="images/bar/ciroc2.jpg">
                        <p>Ciroc</p>
                        <button class="learn-more" onclick="samOpenModal('modal14')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/grey1.jpg" alt="Grey Goose" data-hover="images/bar/grey2.jpg">
                        <p>Grey Goose</p>
                        <button class="learn-more" onclick="samOpenModal('modal15')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/khor1.jpg" alt="Khor" data-hover="images/bar/khor2.jpg">
                        <p>Khor</p>
                        <button class="learn-more" onclick="samOpenModal('modal16')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/pinnacle1.jpg" alt="Pinnacle" data-hover="images/bar/pinnacle2.jpg">
                        <p>Pinnacle</p>
                        <button class="learn-more" onclick="samOpenModal('modal17')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/sky1.jpg" alt="Skyy" data-hover="images/bar/sky2.jpg">
                        <p>Skyy</p>
                        <button class="learn-more" onclick="samOpenModal('modal18')">Learn More</button>
                    </div>
                </div>
            </div>
            <button class="carousel-button right" id="samRightButtonVodka" onclick="samShowNext('vodka')">&#10095;</button>
        </div>

        <!-- Vodka Modals -->
        <div id="modal14" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal14')">&times;</span>
                <h2>Ciroc</h2>
                <p>CÎROC is a truly modern vodka, filled with flavour and style. Lusciously smooth, playfully sophisticated CÎROC is a commitment to superior taste, quality and a fun-loving lifestyle. Perfectly smooth served straight or on the rocks, CÎROC is also perfect in some of your favourite cocktails.</p>
            </div>
        </div>

        <div id="modal15" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal15')">&times;</span>
                <h2>Grey Goose</h2>
                <p>Experience the height of luxury. Combining spring water from the French Alps and soft winter wheat from Picardie, GREY GOOSE® Altius recreates the extraordinary, natural effects of high-altitude temperatures to yield a remarkably smooth vodka with subtle hints of minerality.</p>
            </div>
        </div>

        <div id="modal16" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal16')">&times;</span>
                <h2>Khor</h2>
                <p>We have perfected a foolproof balance of the finest ingredients with Khor Platinum, creating a premium vodka with an exceptional smoothness. The Platinum is the ideal vodka for outstanding cocktails.</p>
            </div>
        </div>

        <div id="modal17" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal17')">&times;</span>
                <h2>Pinnacle</h2>
                <p>Clean taste and easy mixability make our vodka the ideal drinking companion. When you’re kicking back after work or watching the big game, Pinnacle Original goes down smooth and won’t bust your wallet.</p>
            </div>
        </div>

        <div id="modal18" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal18')">&times;</span>
                <h2>Skyy</h2>
                <p>Made from pure American grains and water, SKYY VODKA is enriched by minerals of The Pacific Bay. Feel the pure taste of San Francisco.</p>
            </div>
        </div>

        <!-- Whiskey Section -->
        <h3>Whiskey</h3>
        <div class="carousel-container">
            <button class="carousel-button left" id="samLeftButtonWhiskey" onclick="samShowPrevious('whiskey')">&#10094;</button>
            <div class="carousel-wrapper">
                <div class="sam-carousel-items whiskey">
                    <div class="sam-carousel-item">
                        <img src="images/bar/crown1.jpg" alt="Crown Royal" data-hover="images/bar/crown2.jpg">
                        <p>Crown Royal</p>
                        <button class="learn-more" onclick="samOpenModal('modal19')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/evan1.jpg" alt="Evan Williams" data-hover="images/bar/evan2.jpg">
                        <p>Evan Williams</p>
                        <button class="learn-more" onclick="samOpenModal('modal20')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/jack1.jpg" alt="Jack Daniels" data-hover="images/bar/jack2.jpg">
                        <p>Jack Daniels</p>
                        <button class="learn-more" onclick="samOpenModal('modal21')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/jameson1.jpg" alt="Jameson" data-hover="images/bar/jameson2.jpg">
                        <p>Jameson</p>
                        <button class="learn-more" onclick="samOpenModal('modal22')">Learn More</button>
                    </div>
                    <div class="sam-carousel-item">
                        <img src="images/bar/maker1.jpg" alt="Makers Mark" data-hover="images/bar/maker2.jpg">
                        <p>Makers Mark</p>
                        <button class="learn-more" onclick="samOpenModal('modal23')">Learn More</button>
                    </div>
                </div>
            </div>
            <button class="carousel-button right" id="samRightButtonWhiskey" onclick="samShowNext('whiskey')">&#10095;</button>
        </div>

        <!-- Whiskey Modals -->
        <div id="modal19" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal19')">&times;</span>
                <h2>Crown Royal</h2>
                <p>Crown Royal Fine De Luxe Blended Canadian Whisky is the standard of excellence for Canadian whisky. It is an extraordinary blend of 50 full-bodied Canadian whiskies, matured to perfection.</p>
            </div>
        </div>

        <div id="modal20" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal20')">&times;</span>
                <h2>Evan Williams</h2>
                <p>Evan Williams Bottled-in-Bond is aged under government supervision and meeting the exact requirements for a Bottled-in-Bond Bourbon. It has all the kick you expect—but still goes down smooth.</p>
            </div>
        </div>

        <div id="modal21" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal21')">&times;</span>
                <h2>Jack Daniels</h2>
                <p>Mellowed drop by drop through 10-feet of sugar maple charcoal, then matured in handcrafted barrels of our own making. And our Tennessee Whiskey doesn’t follow a calendar.</p>
            </div>
        </div>

        <div id="modal22" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal22')">&times;</span>
                <h2>Jameson</h2>
                <p>Jameson Black Barrel is an exceptional blend of our best Select Batch Whiskeys. Crafted from distinct batches, matured in different barrel types and expertly aged to deliver a rich and sublimely smooth taste.</p>
            </div>
        </div>

        <div id="modal23" class="modal">
            <div class="modal-content">
                <span class="close" onclick="samCloseModal('modal23')">&times;</span>
                <h2>Maker's Mark</h2>
                <p>Aging our whisky for over 10 years wasn't something we ever did. Not because we didn't believe in it but because we hadn't found our way of doing it. Maker’s Mark® Cellar Aged defines an older whisky that’s distinctly Maker’s.</p>
            </div>
        </div>
    </div>


     <script src="bar.js"></script>

<?php include('footer.html'); ?>