
/** populate pieces with correct background segments **/

$( document ).ready(function() {
    var i;
    var targetPiece;
	for( i = 0; i <= 15; i++;){
		targetPiece = $("#puzzlearea:nth-child(i)");
		targetPiece.style.backgroundImage = "url(./friend.jpg)";
	}
});