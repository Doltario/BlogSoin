<?php
  // src/User.php
  /**
   * @Entity @Table(name="users")
   **/
  class User{
    /** @Id @Column(type="integer") @GeneratedValue **/
      protected $id;
    /** @Column(type="string", length=160, nullable=true) **/
      protected $name;
    /** @Column(type="string", length=160, nullable=true) **/
      protected $password;
    /** @Column(type="string", length=160, nullable=true)**/
      protected $mail;
    /** @Column(type="boolean") **/
      protected $is_admin;
}
?>
