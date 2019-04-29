var puzzle = [[1,2,3,4], [5,6,7,8], [9,10,11,12], [13,14,15,16]];

$(document).ready(function() {

$("#puzzlearea > div").click(function() {
		var currPiece = $(this);
		var currPieceNumber = ($("#puzzlearea > div").index(this)) + 1;
		
		console.log("Piece #" + currPieceNumber + " clicked at offset: ( X: " + currPiecePosX + " Y:" + currPiecePosY + " )");


	}
);

});
