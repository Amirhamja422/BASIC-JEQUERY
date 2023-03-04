<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
      <p id ="demo"></p>

  <script>
    /*
    using for loop 
 
 */
    let num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    // $s=0;
    // for(let i = 0; i < num.length; i++) 
    //   {
    //        console.log($s++);
    //       console.log((num[i]));
    //   }


    /*
     using foreach loop 

     */

    //  num.forEach((element)=>{
    //    console.log(element*element);
    //    console.log(element);

    //  })

    /*
    The Array.from() method returns an array from any iterable object
    Create an array from a string
    string convert into array 

     */


    //  let text = "amir";
    //  const myArr = Array.from(text);
    //  console.log(myArr);

    //  output: 
    //  (4) ['a', 'm', 'i', 'r']

    /*
      loop shortcart 
    */

    // for(let i of num){
    //   console.log ( i );
    // }


    /*
       array map in  javascript that is used  create a new array
     */
    // let a = num.map((value,index,array)=>{
    //   console.log (value,index,array);
    //   return value+2;

    // });

    // console.log(a);

    /*
        array  filter 
       array filter is used find out the value in the array`
  
     */

      //1. const ages = [32, 33, 16, 40];

      // document.getElementById("demo").innerHTML = ages.filter(checkAdult);

      //     function checkAdult(age) {
      //          return age >= 18;
      //     }



    //2.  let array2 = num.filter((a)=>{
    //   return a<7
    //  })

    //  document.getElementById("demo").innerHTML =array2;

  

        /*
        array reduce method  to reduce values  to array
     */

    //  let array2 = num.reduce((a,b)=>{
    //   return a+b;
    //  })

    //  console.log(array2);
    



  </script>


</body>

</html>