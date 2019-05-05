var piece16 = [4, 4];
var currPieceCoordinates = [];

$(document).ready(function() {

	$("#puzzlearea > div").click(function() {
			var currPiece = $(this);
			var currPieceNumber = ($("#puzzlearea > div").index(this)) + 1;

			if(currPieceNumber % 4 == 0){
				currPieceX = 4;
			}
			else{
				currPieceX = currPieceNumber % 4;
			}
		
			currPieceY = Math.ceil(currPieceNumber / 4);
			currPieceCoordinates.length = 0;
			currPieceCoordinates.push(currPieceX, currPieceY);
			
			console.log("Piece #" + currPieceNumber + " clicked at offset: ( X: " + currPieceCoordinates[0] + " Y:" + currPieceCoordinates[1] + " ) ");

			/** if blank square is to the right of target piece **/
			if (currPieceCoordinates[0]){
				$("#puzzlearea > div:nth-child(16)").before(currPiece);
			}
		});
});
