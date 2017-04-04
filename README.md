# NGStatsEngine-old

This is a release of the code behind the old NetherGames statistics engine. It is built upon [Daltontastic's](https://github.com/Daltontastic) old LAPIS project. A lot of new features have been added, such as:
- Functional login system, requires HereAuth
- Extra profile fields such as biography, email, rank, etc.

If you have used the system before, you will have known that there is also a forgot password function. This part of the project has been removed from this release.
LAPIS requires the plugin [PlayerStats](https://github.com/xpyctum/PlayerStats) to track player statistics. The website has been edited to show only kills, deaths and the player bio if set.
If you dig into the code, you will see it is quite messy, with the original LAPIS project using PDO to connect to the database and the stats engine add-on using mysqli to connect. This is mainly because I had never planned to release this code, and because I was lazy and wanted to finish the job quickly, I wrote some messy stuff :P. Feel free to fork the project and edit it to your own needs.

### Notes
- You may want to edit the code in portal/accountedit.php, user input from account.php isn't sanitized before being inserted into the database
- This project is no longer maintained. Issues reported will not be fixed and will serve as a reference only.
