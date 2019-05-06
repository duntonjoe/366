/**
*	Assignment: 	Create a browser based 15 puzzle utilizing jquery and javascript functionality.
**/


"use strict";

var piece16top = 300;
var piece16left = 300;
var currPieceCoordinates = [];

/** 
*	this function takes care of swapping a piece with the blank square.
*	it assumes the swap is valid.
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
			/**
			*	this is the logic for piece movement. 
			*	Javascript has no logical XOR, so I have to do this garbage to make diagonal movement illegal.
			**/
			//blank square is to the right of target piece
			if(((currPiecePos.left - piece16left) == -100) && ((currPiecePos.top - piece16top) == 0)){
				swapWith16($(this));
				return;
			}
			//blank square is below target piece
			if (((currPiecePos.top - piece16top) == -100) && ((currPiecePos.left - piece16left) == 0)){
				swapWith16($(this));
				return;
			}
			//blank square is to the left of target piece
			if(((currPiecePos.left - piece16left) == 100) && ((currPiecePos.top - piece16top) == 0)){
				swapWith16($(this));
				return;
			}
			//blank square is above target piece
			if (((currPiecePos.top - piece16top) == 100) && ((currPiecePos.left - piece16left) == 0)){
				swapWith16($(this));
			}
		});

	$("#puzzlearea > div").mouseover(function(){
		var currPiecePos = $(this).position();

		//blank square is to the right of target piece
		if(((currPiecePos.left - piece16left) == -100) && ((currPiecePos.top - piece16top) == 0)){
			$(this).css("color", "red");
			$(this).css("border-color", "red");
			return;
		}
		//blank square is below target piece
		if (((currPiecePos.top - piece16top) == -100) && ((currPiecePos.left - piece16left) == 0)){
			$(this).css("color", "red");
			$(this).css("border-color", "red");
			return;
		}
		//blank square is to the left of target piece
		if(((currPiecePos.left - piece16left) == 100) && ((currPiecePos.top - piece16top) == 0)){
			$(this).css("color", "red");
			$(this).css("border-color", "red");
			return;
		}
		//blank square is above target piece
		if (((currPiecePos.top - piece16top) == 100) && ((currPiecePos.left - piece16left) == 0)){
			$(this).css("color", "red");
			$(this).css("border-color", "red");
			return;
		}
		//if move is not in at most one of four valid cases, then make it turn black.
		else{
			$(this).css("color", "black");
		}
	});


	/**
	*	This function takes care of resetting the text color on mouseout.
	**/
	$("#puzzlearea > div").mouseout(function(){
  		$(this).css("color", "white");
  		$(this).css("border-color", "black");
	});


	/**
	*	I've elected to shuffle by iterating though the puzzle 15 times.
	*	In each iteration, I grab a random piece and swap it with the blank.
	*	This seems psuedo-random enough for our purposes.
	**/
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