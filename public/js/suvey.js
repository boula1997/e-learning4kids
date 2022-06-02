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
            value: "talkative",
            text: "1. Is talkative"
            }, {
            value: "find fault",
            text: "2. Tends to find fault with others"
            }, {
            value: "Does a thorough job",
            text: "3. Does a thorough job"
            }, {
            value: "Is depressed, blue",
            text: "4. Is depressed, blue"
            }, {
            value: "Is original, comes up with new ideas",
            text: "5. Is original, comes up with new ideas"
            },{
            value: "Is reserved",
            text: "6. Is reserved"
            },{
            value: "Is helpful and unselfish with others",
            text: "7. Is helpful and unselfish with others"
            },{
            value: "Can be somewhat careless",
            text: "8. Can be somewhat careless"
            },{
            value: "Is relaxed, handles stress well",
            text: "9. Is relaxed, handles stress well"
            },{
            value: "Is curious about many different things",
            text: "10. Is curious about many different things"
            },{
            value: "Is full of energy",
            text: "11. Is full of energy"
            },{
            value: "Starts quarrels with others",
            text: "12. Starts quarrels with others"
            },{
            value: "Is a reliable worker",
            text: "13. Is a reliable worker"
            },{
            value: "Can be tense",
            text: "14. Can be tense"
            },{
            value: "Is ingenious, a deep thinker",
            text: "15. Is ingenious, a deep thinker"
            },{
            value: "Generates a lot of enthusiasm",
            text: "16. Generates a lot of enthusiasm"
            },{
            value: "Has a forgiving nature",
            text: "17. Has a forgiving nature"
            },{
            value: "Tends to be disorganized",
            text: "18. Tends to be disorganized"
            },{
            value: "Worries a lot",
            text: "19. Worries a lot"
            },{
            value: "Has an active imagination",
            text: "20. Has an active imagination"
            },{
            value: "Tends to be quiet",
            text: "21. Tends to be quiet"
            },{
            value: "Is generally trusting",
            text: "22. Is generally trusting"
            },{
            value: "Tends to be lazy",
            text: "23. Tends to be lazy"
            },{
            value: "Is emotionally stable, not easily upset",
            text: "24. Is emotionally stable, not easily upset"
            },{
            value: "Is inventive",
            text: "25. Is inventive"
            },{
            value: "Has an assertive personality",
            text: "26. Has an assertive personality"
            },{
            value: "Can be cold and aloof",
            text: "27. Can be cold and aloof"
            },{
            value: "Perseveres until the task is finished",
            text: "28. Perseveres until the task is finished"
            },{
            value: "Can be moody",
            text: "29. Can be moody"
            },{
            value: "Values artistic, aesthetic experiences",
            text: "30. Values artistic, aesthetic experiences"
            },{
            value: "Is sometimes shy, inhibited",
            text: "31. Is sometimes shy, inhibited"
            },{
            value: "Is considerate and kind to almost everyone",
            text: "32. Is considerate and kind to almost everyone"
            },{
            value: "Does things efficiently",
            text: "33. Does things efficiently"
            },{
            value: "Remains calm in tense situations",
            text: "34. Remains calm in tense situations"
            },{
            value: "Prefers work that is routine",
            text: "35. Prefers work that is routine"
            },{
            value: "Is outgoing, sociable",
            text: "36. Is outgoing, sociable"
            },{
            value: "Is sometimes rude to others",
            text: "37. Is sometimes rude to others"
            },{
            value: "Makes plans and follows through with them",
            text: "38. Makes plans and follows through with them"
            },{
            value: "Gets nervous easily",
            text: "39. Gets nervous easily"
            },{
            value: "Likes to reflect, play with ideas",
            text: "40. Likes to reflect, play with ideas"
            },{
            value: "Has few artistic interests",
            text: "41. Has few artistic interests"
            },{
            value: "Likes to cooperate with others",
            text: "42. Likes to cooperate with others"
            },{
            value: "Is easily distracted",
            text: "43. Is easily distracted"
            },{
            value: "Is sophisticated in art, music, or literature",
            text: "44. Is sophisticated in art, music, or literature"
            }
        ]
      },
      {
          "type": "expression",
          "name": "total",
          "title": "Total Quality:",
          "expression": "sumInObject({Quality})",
          "displayStyle": "decimal",
          "startWithNewLine": true
      }
    ]
  };
window.survey = new Survey.Model(json);

survey.onComplete.add(function (result) {
        document
            .querySelector('#surveyResult')
            .innerHTML = "result: " + JSON.stringify(result.data);
    });


  function sumInObject(params) {
  if (params.length != 1) return 0;
  if(!params[0]) return 0;
  const object = params[0];
  const array = Object.keys(object).map(key => object[key]).map(value => parseInt(value));
  return array.reduce((left, right) => left + right);

  }
  Survey.FunctionFactory.Instance.register("sumInObject", sumInObject);

  $("#surveyElement").Survey({
      model: survey,
      onComplete: sendDataToServer
});

//   function sendDataToServer(survey) {
//      //take data from survey var
//     var xmlhttp = new XMLHttpRequest();
//     xmlhttp.open("PATCH", "/questionnaireSurvey");
//     xmlhttp.setRequestHeader("Content-Type", "application/json");
//     xmlhttp.send(JSON.stringify({personality_type = 3}));
//   }





















  // Survey.defaultBootstrapMaterialCss.navigationButton = "btn btn-green";
  // Survey.defaultBootstrapMaterialCss.rating.item = "btn btn-default my-rating";
  // Survey
  //     .StylesManager
  //     .applyTheme("bootstrapmaterial");

  // var json = {
  //     pages: [
  //         {
  //             questions: [
  //                 {
  //                     type: "matrix",
  //                     name: "Quality",
  //                     title: "Please indicate if you agree or disagree with the following statements",
  //                     columns: [
  //                         {
  //                             value: 1,
  //                             text: "Strongly Disagree"
  //                         }, {
  //                             value: 2,
  //                             text: "Disagree"
  //                         }, {
  //                             value: 3,
  //                             text: "Neutral"
  //                         }, {
  //                             value: 4,
  //                             text: "Agree"
  //                         }, {
  //                             value: 5,
  //                             text: "Strongly Agree"
  //                         }
  //                     ],
  //                     rows: [
  //                         {
  //                             value: "affordable",
  //                             text: "Product is affordable"
  //                         }, {
  //                             value: "does what it claims",
  //                             text: "Product does what it claims"
  //                         }, {
  //                             value: "better then others",
  //                             text: "Product is better than other products on the market"
  //                         }, {
  //                             value: "easy to use",
  //                             text: "Product is easy to use"

  //                         }, {
  //                             value: "ii",
  //                             text: "Product is e use"
  //                         }
  //                         , {
  //                             value: "ii1",
  //                             text: "Product is e use1"
  //                         }
  //                         , {
  //                             value: "ii2",
  //                             text: "Product is e use2"
  //                         }
  //                         , {
  //                             value: "ii3",
  //                             text: "Product is e use3"
  //                         }
  //                     ]
  //                 }, {
  //                     type: "rating",
  //                     name: "satisfaction",
  //                     title: "How satisfied are you with the Product?",
  //                     isRequired: true,
  //                     mininumRateDescription: "Not Satisfied",
  //                     maximumRateDescription: "Completely satisfied"
  //                 }, {
  //                     type: "rating",
  //                     name: "recommend friends",
  //                     visibleIf: "{satisfaction} > 3",
  //                     title: "How likely are you to recommend the Product to a friend or co-worker?",
  //                     mininumRateDescription: "Will not recommend",
  //                     maximumRateDescription: "I will recommend"
  //                 }, {
  //                     type: "comment",
  //                     name: "suggestions",
  //                     title: "What would make you more satisfied with the Product?"
  //                 }
  //             ]
  //         }, {
  //             questions: [
  //                 {
  //                     type: "radiogroup",
  //                     name: "price to competitors",
  //                     title: "Compared to our competitors, do you feel the Product is",
  //                     choices: ["Less expensive", "Priced about the same", "More expensive", "Not sure"]
  //                 }, {
  //                     type: "radiogroup",
  //                     name: "price",
  //                     title: "Do you feel our current price is merited by our product?",
  //                     choices: ["correct|Yes, the price is about right", "low|No, the price is too low for your product", "high|No, the price is too high for your product"]
  //                 }, {
  //                     type: "multipletext",
  //                     name: "pricelimit",
  //                     title: "What is the... ",
  //                     items: [
  //                         {
  //                             name: "mostamount",
  //                             title: "Most amount you would every pay for a product like ours"
  //                         }, {
  //                             name: "leastamount",
  //                             title: "The least amount you would feel comfortable paying"
  //                         }
  //                     ]
  //                 }
  //             ]
  //         }, {
  //             questions: [
  //                 {
  //                     type: "text",
  //                     name: "email",
  //                     title: "Thank you for taking our survey. Your survey is almost complete, please enter your email address in the box below if you wish to participate in our drawing, then press the 'Submit' button."
  //                 }
  //             ]
  //         }
  //     ]
  // };

  // window.survey = new Survey.Model(json);

  // survey
  //     .onComplete
  //     .add(function (result) {
  //         document
  //             .querySelector('#surveyResult')
  //             .textContent = "Result JSON:\n" + JSON.stringify(result.data, null, 3);
  //     });

  // // $("#surveyElement").Survey({model: survey});


  // function sumInObject(params) {
  //     if (params.length != 1) return 0;
  //     if(!params[0]) return 0;
  //     const object = params[0];
  //     const array = Object.keys(object)
  //       .map(key => object[key])
  //       .map(value => parseInt(value));
  //     return array.reduce((left, right) => left + right);
  //   }

  //   Survey.FunctionFactory.Instance.register("sumInObject", sumInObject);

  //   $("#surveyElement").Survey({model: survey});


  // Survey.defaultBootstrapMaterialCss.navigationButton = "btn btn-green";
  // Survey.defaultBootstrapMaterialCss.rating.item = "btn btn-default my-rating";
  // Survey
  //     .StylesManager
  //     .applyTheme("bootstrapmaterial");


