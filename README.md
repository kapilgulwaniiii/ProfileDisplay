# ProfileDisplay
Project for Ubisoft
Hey!
So considering all the module requirements I have developed this project.
For the design, HTML and css are used (Gradient images, animated zoom,etc)
Going forward with the website, A registration page opens up that requires 3 parameters that are Title, Description and Image.
Once all three are filled up, the register button can be clicked and connect.php is opened. This establishes a connection to the datatbase.
Once that is done, insertdata.php opens that inserts the data into mysql database called displaycards that has a table named queue.
The queue has a limit of 100 items in which 100 display cards can be stored.
After insertion, the home page appears (CardsPage.php) in which the display cards are presented. The limit for the number of display cards on the page are 6. 
A ajax query is fired to remove a display card that has completed 30 seconds on the page. 
Once the display card is removed, In a FIFO manner, the next item gets pulled onto the CardsPage.php.
Hence only 6 cards are visibile at a time, and if there are no cards in the queue, the page is represented as empty with the county of number of items in queue.
 
