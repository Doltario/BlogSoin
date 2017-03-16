<?php
  // src/User.php
  /**
   * @Entity @Table(name="users")
   **/
  class User{
    /** @Id @Column(type="integer") @GeneratedValue **/
      protected $id;
    /** @Column(type="string", length=50, nullable=true) **/
      protected $titre;
    /** @Column(type="text", length=5000, nullable=true) **/
      protected $content;
    /** @Column(type="date", length=50, nullable=true) **/
      protected $date;

}
?>
