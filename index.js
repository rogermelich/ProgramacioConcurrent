function b(cx) {
    console.log('b');
    cx()
}

b(function (){
   console.log('a')
});