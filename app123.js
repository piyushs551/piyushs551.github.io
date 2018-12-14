(function() {
  var app = angular.module('gemStore', []);

//Add a method to GalleryController called setCurrent that accepts a value and assigns it to current.
// If no value is passed in, set current to 0

   app.controller('GalleryController', function(){
    this.current = 0;
     
     this.setCurrent = function(img){
       this.current = img || 0;
     };
  });




  app.controller('StoreController', function(){
    this.products = gems;
  });




  app.controller('TabController', ["$scope",function($scope){
    this.tab = 1;

    this.setTab = function(newValue){
      this.tab = newValue;
    };

    this.isSet = function(tabName){
      return this.tab === tabName;
    };
    $scope.incrementUpvotes = function(review){
     
      review.upvotes+=1;
    }
  }]);


//When addReview is called with a product, it should 
//add the review from the controller to the passed-in product's reviews array. Implement this functionality in the addReview method.
 
 app.controller('ReviewController', function(){
    this.review = {};
    
    this.addReview = function(product){
      this.review.createdOn = Date.now();
      this.review.upvotes = 0;
      product.reviews.push(this.review);
      this.review = {};
      };
    
  });



  var gems = [
    {
      name: 'Manchester United',
      description: "win secured late against a struggling side, in a game blighted by a series of baffling refereeing decisions that afflicted both sides. A performance that was often slow and disjointed. The gap to the top still 13 surely insurmountable points. If this was the start of an upsurge, it was a low-key, unconvincing one but Manchester United’s victory over Crystal Palace at least confirmed a level of tenacity and fight. It wasn’t another draw – and there have been six of them in the past 10 weeks – and it meant United have won consecutive Premier League games for the first time since August. And United, to take the most positive conceivable interpretation, are now on a run of just one defeat in 11 league games..",
      ratings: 8,
      price: 3317000000,
      rarity: 7,
      color: '#CCC',
      faces: 14,
      images: [
        "images/i.png", 
        
      ],
      reviews: [{
        stars: 5,
        body: "I love Zlatan Ibrahimovic! He is absolutely beast when it comes to score important goals!!",
        author: "joe@example.org",
        createdOn: 1397490980837,
        upvotes: 10
      }, {
        stars: 1,
        body: "This match was one of the best atmosphere at Old Treford!!",
        author: "tim@example.org",
        createdOn: 1397490980837,
        upvotes: 10
      }]
    },
    {
      name: 'Boston Celtics',
      description: "Danny Ainge isn’t going to blow his cool and start pointing fingers after the Celtics fell into an 0-2 deficit against the Bulls in the first round of the playoffs. While appearing on CSNNE’s Toucher & Rich, Ainge said that the criticism being leveled at coach Brad Stevens’ for the Celtics’ disappointing play was “fair,” but he doesn’t agree with that sentiment. Ainge had the following to say about those critiques.",
      ratings: 8,
      price: 220000000,
      rarity: 7,
      color: '#CCC',
      faces: 14,
      images: [
        "images/h.png", 
        
      ],
      reviews: [{
        stars: 5,
        body: "Danny Ainge is playing just awsome this season!He should be in the race for the MVP!!",
        author: "Vardhan@example.org",
        createdOn: 1397490980837,
        upvotes: 10
      }, {
        stars: 1,
        body: "This gem sucks.",
        author: "tim@example.org",
        createdOn: 1397490980837,
        upvotes: 10
      }]
    },
    {
      name: 'Miami Heat',
      description: "Johnson, 30, had a career year in his first season with the Heat. In 76 games, mostly off the bench, the power forward put up a career-high 12.8 points, 4.9 rebounds and 3.6 assists per game. During the month of April, when the Heat were desperately fighting for a playoff spot, the veteran posted averages of 16.7 points, 6.3 rebounds and 5.7 assists per contest.",
      ratings: 9,
      price: 119500000,
      rarity: 6,
      color: '#EEE',
      faces: 12,
      images: [
        "images/e.png",
      ],
      reviews: [{
        stars: 3,
        body: "I think this player was just OK, could honestly use more dribbles and 3 pointers.",
        author: "JimmyDean@example.org",
        createdOn: 1397490980837,
        upvotes: 10
      }, {
        stars: 4,
        body: "Any player with a better mindset can become the best in the world!",
        author: "gemsRock@example.org",
        createdOn: 1397490980837,
        upvotes: 10
      }]
    },
    {
      name: 'New England Patriots',
      description: "Zircon is our most coveted and sought after player. You will pay much to be the proud owner of this high shine player.",
      ratings: 70,
      price: 110000000,
      rarity: 2,
      color: '#000',
      faces: 6,
      images: [
        "images/f.png",
      ],
      reviews: [{
        stars: 1,
        body: "This player is WAY too expensive for its defansive value.",
        author: "turtleguyy@example.org",
        createdOn: 1397490980837
      }, {
        stars: 1,
        body: "BBW: High Shine != High Quality.",
        author: "LouisW407@example.org",
        createdOn: 1397490980837
      }, {
        stars: 1,
        body: "Don't waste your money on this player!",
        author: "nat@example.org",
        createdOn: 1397490980837
      }]
    }
  ];
})();
