const hasMeeting = false;
const hasSirAbaiable = false;

const meeting = new Promise((reslove , reject) =>{
   if(!hasMeeting){
       const meetingDetials = {
           name : "simulator",
           time : "21-2-21",
       }
       reslove(meetingDetials);
   } else{
       reject(new Error("already have a meeting"));
   }
});

const sirAbaiable = new Promise((reslove , reject) =>{
    if(hasSirAbaiable){  
        reslove("sir is avaible");
    } else{
        reject(new Error("sir is not avaible"));
    }
 });

//  const addToCalender = (meetingDetails) => {
//      return new Promise((resolve , reject) => {
//           const calender = `${meetingDetails.name} has been scheduled at ${meetingDetails.time}`;
//           resolve(calender);
//      });
//  };

// const addToCalender = (meetingDetails) => {
    
//          const calender = `${meetingDetails.name} has been scheduled at ${meetingDetails.time}`;
//          return Promise.resolve(calender);
    
// };


const addToCalender = (fahad) => { //fahad == meetingDetails
    
    const calender = `${fahad.name} has been scheduled at `;
    return Promise.resolve(calender);

};

 //main
meeting
    .then(addToCalender) // pass meetingDetails
    .then((res) => {
    console.log(res);
}).catch((err) => {
    console.log(err.message);
})

sirAbaiable.then((res) => {
    console.log(res);
}).catch((err) => {
    console.log(err.message);
})