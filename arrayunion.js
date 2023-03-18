// code to give array union

var firstArr = [1, 2, 3];
var secondArr =  [100, 2, 1, 10];
var unionArr;
function union(firstArr, secondArr) {
	unionArr = firstArr;
	$.each(secondArr, function(ele, val) {
   if (!firstArr.includes(val)) {
   	 unionArr.push(val);
   }	
  });
	return unionArr;
}

console.log(union(firstArr, secondArr));
