var firstArr = [1, 2, 3, 4, 5];
var secondArr = [1, [2], [3, [[4]]],[5,6]];
var unionArr;
function difference(firstArr, secondArr) {
	unionArr = firstArr;
	$.each(secondArr, function(ele, val) {
  if (val.keys) {
  	difference(unionArr, val);
  }
   else if (!firstArr.includes(val)) {
   	 unionArr.push(val);
   }	
  });
	return unionArr;
}
  console.log(difference(firstArr, secondArr));
