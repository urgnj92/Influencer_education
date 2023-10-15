

async function curriculum_flg(){
  try{
    
    let response = await fetch("flgChenge");
    

  }catch(errorCount){
    console.log(errorCount);
  }finally{
    console.log("curriculum_flg: 変更");
  }
}