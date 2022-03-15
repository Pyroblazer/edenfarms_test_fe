var data = [
    {type:"Foo", year:1995},
    {type:"Bar", year:1993},
    {type:"Foobar", year:2020}
];

const result = data.sort((a, b)=>{
    return a.year - b.year
})

console.log(result)  
/* [
    { type: 'Bar', year: 1993 },
    { type: 'Foo', year: 1995 },
    { type: 'Foobar', year: 2020 }
  ]
*/