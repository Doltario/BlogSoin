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

  /**
   * Get id
   *
   * @return integer
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Set name
   *
   * @param string $name
   *
   * @return User
   */
  public function setName($name)
  {
      $this->name = $name;

      return $this;
  }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
?>
