var json = {
    "showQuestionNumbers": "off",
    "elements": [
      {
        type: "matrix",
        name: "Quality",
        title: "Please answar the following question in order to know your personality type.",
        columns: [{
          value: 1,
          text: "Strongly disagree"
        }, {
          value: 2,
          text: "Disagree a little"
        }, {
          value: 3,
          text: "Natural"
        }, {
          value: 4,
          text: "Agree a little"
        }, {
          value: 5,
          text: "Strongly agree"
        }
      ],
        rows: [{
          value: "1",
          text: "1. Is talkative"
        }, {
          value: "2",
          text: "2. Tends to find fault with others"
        }, {
          value: "3",
          text: "3. Does a thorough job"
        }, {
          value: "4",
          text: "4. Is depressed, blue"
        }, {
          value: "5",
          text: "5. Is original, comes up with new ideas"
        },{
          value: "6",
          text: "6. Is reserved"
        },{
          value: "7",
          text: "7. Is helpful and unselfish with others"
        },{
          value: "8",
          text: "8. Can be somewhat careless"
        },{
          value: "9",
          text: "9. Is relaxed, handles stress well"
        },{
          value: "10",
          text: "10. Is curious about many different things"
        },{
          value: "11",
          text: "11. Is full of energy"
        },{
          value: "12",
          text: "12. Starts quarrels with others"
        },{
          value: "13",
          text: "13. Is a reliable worker"
        },{
          value: "14",
          text: "14. Can be tense"
        },{
          value: "15",
          text: "15. Is ingenious, a deep thinker"
        },{
          value: "16",
          text: "16. Generates a lot of enthusiasm"
        },{
          value: "17",
          text: "17. Has a forgiving nature"
        },{
          value: "18",
          text: "18. Tends to be disorganized"
        },{
          value: "19",
          text: "19. Worries a lot"
        },{
          value: "20",
          text: "20. Has an active imagination"
        },{
          value: "21",
          text: "21. Tends to be quiet"
        },{
          value: "22",
          text: "22. Is generally trusting"
        },{
          value: "23",
          text: "23. Tends to be lazy"
        },{
          value: "24",
          text: "24. Is emotionally stable, not easily upset"
        },{
          value: "25",
          text: "25. Is inventive"
        },{
          value: "26",
          text: "26. Has an assertive personality"
        },{
          value: "27",
          text: "27. Can be cold and aloof"
        },{
          value: "28",
          text: "28. Perseveres until the task is finished"
        },{
          value: "29",
          text: "29. Can be moody"
        },{
          value: "30",
          text: "30. Values artistic, aesthetic experiences"
        },{
          value: "31",
          text: "31. Is sometimes shy, inhibited"
        },{
          value: "32",
          text: "32. Is considerate and kind to almost everyone"
        },{
          value: "33",
          text: "33. Does things efficiently"
        },{
          value: "34",
          text: "34. Remains calm in tense situations"
        },{
          value: "35",
          text: "35. Prefers work that is routine"
        },{
          value: "36",
          text: "36. Is outgoing, sociable"
        },{
          value: "37",
          text: "37. Is sometimes rude to others"
        },{
          value: "38",
          text: "38. Makes plans and follows through with them"
        },{
          value: "39",
          text: "39. Gets nervous easily"
        },{
          value: "40",
          text: "40. Likes to reflect, play with ideas"
        },{
          value: "41",
          text: "41. Has few artistic interests"
        },{
          value: "42",
          text: "42. Likes to cooperate with others"
        },{
          value: "43",
          text: "43. Is easily distracted"
        },{
          value: "44",
          text: "44. Is sophisticated in art, music, or literature"
        }]
      }, {
          // "type": "expression",
          // "name": "total",
          // "title": "Total Quality:",
          // "expression": "sumInObject({Quality})",
          "displayStyle": "decimal",
          "startWithNewLine": true
      }
    ]
  };
  window.survey = new Survey.Model(json);


  $("#surveyElement").Survey({model: survey});
  
  survey.onComplete.add(function (result) {
    myFunction();
    setTimeout(function(){ 
      document.getElementById('surveyFinalResult').value = JSON.stringify(result.data);
      $('#surveyForm').submit();
    },2000);
      
  });
  
  function myFunction() {
    alert("Are You Sure You Want To Submit");
  }
  
//   function sumInObject(params) {
    
//     if (params.length != 1) 
//         return 0;
  
//     if(!params[0]) 
//         return 0;

//     const object = params[0];
//     const array = Object.keys(object).map(key => object[key]).map(value => parseInt(value));

//   return array.reduce((left,right) => left+ right );
// }
Survey.FunctionFactory.Instance.register("sumInObject", sumInObject);  












  /*const results = json_decode(JSON.stringify(result.data), true)['Quality'];
      for (let index = 0; index < results.length; index++) {
        if (results[index]==null || results[index]==0 ){
          myFunction();
        }        
        else{

          
        }
      }
      if(flag==ture){
        setTimeout(function(){ 
          document.getElementById('surveyFinalResult').value = JSON.stringify(result.data);
          $('#surveyForm').submit();
        },2000);
      } */
  




