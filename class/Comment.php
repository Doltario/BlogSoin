<?php
  // src/Comment.php
  /**
   * @Entity @Table(name="comments")
   **/
  class Comment{
    /** @Id @Column(type="integer") @GeneratedValue **/
      protected $id;
    /** @Column(type="text", length=5000, nullable=true) **/
      protected $content;
    /** @Column(type="datetime", length=50, nullable=true) **/
      protected $dateTime;

}
?>
