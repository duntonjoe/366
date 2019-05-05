var piece16top = 300;
var piece16left = 300;
var currPieceCoordinates = [];

/** 
this function takes care of swapping a piece with the blank square.
it assumes the swap is valid.
**/
function swapWith16(target){
	var targetTop = target.position().top;
	var targetLeft = target.position().left;
	$(target).css({top: piece16top, left: piece16left, position:'absolute'});
	piece16top = targetTop;
	piece16left = targetLeft;

}




$(document).ready(function() {

	$("#puzzlearea > div").click(function() {
			var currPiece = $(this);
			var currPieceNumber = ($("#puzzlearea > div").index(this)) + 1;
			var currPiecePos = currPiece.position();

			
			console.log("Piece #" + currPieceNumber + " clicked at offset: ( TOP: " + currPiecePos.top + " LEFT:" + currPiecePos.left + " ) ");

			if((Math.abs(currPiecePos.left - piece16left) == 100) && (Math.abs(currPiecePos.top - piece16top) != 100)){
				swapWith16($(this));
				return;
			}
			else if ((Math.abs(currPiecePos.top - piece16top) == 100) && (Math.abs(currPiecePos.left - piece16left) != 100)){
				swapWith16($(this));
			}

		});

	$("#shufflebutton").click(function() {
       var board = $("#puzzlearea");
       var rand = 2;
       board.find('div').each(function(){
       	rand = parseInt(Math.random() * 15) + 1;
      	console.log(rand);
   		swapWith16($('#puzzlearea > div:nth-child(' + rand + ')'));
		});
    });
});