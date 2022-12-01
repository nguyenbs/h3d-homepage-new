<?php 
class ourTeam extends AppModel
{
 var $name = 'ourTeam';

function deleteTimeLine($idTimeLine)
{
 $this->delete($idTimeLine);
}
function saveContentProject($name,$content,$image,$timeup,$id= null)
{
  $modelSlug= ClassRegistry::init('Slug');
  if($id != null)
  {
    $id= new MongoId($id);
    $save= $this->getTimeLine($id);
  }
  else
  {//$save['TimeLine']['view']= 0;
    $save['TimeLine']['_id']= new MongoId();
  }    
  $save['TimeLine']['name']= $name;
  $save['TimeLine']['image']= $image;
  $save['TimeLine']['timeup']= $timeup;
  $save['TimeLine']['timeCp']=strtotime($timeup);
  $save['TimeLine']['slug']= createSlugMantan($name);
  $save['TimeLine']['content']= $content;
  $this->save($save);
  if($id != null) return $save['TimeLine']['id'];
  else return $save['TimeLine']['_id']->{'$id'};
}
function deleteTheTimeline($idProject,$idTimeLine){
    $save= $this->getTimeLine($idProject);
    if($save)
    {
      $dem= -1;
      $stt= -1;
      foreach($save['TimeLine']['listTimeline'] as $key=> $percent)
      {
        $dem++;
        if($key != $idTimeLine)
        {
          $stt++;
          $tg[$key]= $percent;
        }
      }
      $save['TimeLine']['listTimeline']= $tg;
      $this->save($save, false, array('listTimeline'));
      return 1;
    }
    return 0;
  }

}
 
?>