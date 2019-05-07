<?php
	class ModelEvent extends CI_Model {

		function getEvent(){
            $sql    = " SELECT * FROM `tekiro_event` order by created_date desc";
            $query  = $this->db->query($sql);
            $ret    = "";
            if($query->num_rows()>0){
                $no = 1;
                foreach($query->result() as $row){
                    $ret .= '                        
                        <tr>
                            <th scope="row"><image style="width:100px" src="'.base_url().$row->image_event.'"/></th>
                            <td>'.$row->title.'</td>
                            <td>'.$row->category.'</td>
                            <td><a href="'.base_url().'event/editevent/'.$row->id.'" class="btn btn-primary btn-circle"><i class="fa fa-edit"></i> </a>
                            <button onClick="confirmDeleteEvent(\''.$row->id.'\')" type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i> </button></td>
                        </tr>
                    ';
                    $no++;
                }
            }
            return $ret;
        }

        function getEventByID($id=null){
            $sql    = " SELECT * FROM `tekiro_event` where id = '$id'";
            $query  = $this->db->query($sql);
            $ret    = "";
            if($query->num_rows()>0){
                $row = $query->row();
                $content    = $row->content;
                $content_id = $row->content_id;
                $title      = $row->title;
                $title_id   = $row->title_id;
                $category   = $row->category;
                $image_event   = $row->image_event;
            }
            return array($id,$content,$content_id,$title,$title_id,$category,$image_event);
        }
	}
?>