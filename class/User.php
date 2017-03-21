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
        * @OneToOne(targetEntity="Article", inversedBy="user")
        * @JoinColumn(name="article_id", referencedColumnName="id")
    **/
        protected $article;
    /**
        * @OneToOne(targetEntity="Comment", inversedBy="user")
        * @JoinColumn(name="comment_id", referencedColumnName="id")
    **/
        protected $comment;


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

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     *
     * @return User
     */
    public function setIsAdmin($isAdmin)
    {
        $this->is_admin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean
     */
    public function getIsAdmin()
    {
        return $this->is_admin;
    }


    /**
     * Set article
     *
     * @param \Article $article
     *
     * @return User
     */
    public function setArticle(\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set comment
     *
     * @param \Comment $comment
     *
     * @return User
     */
    public function setComment(\Comment $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \Comment
     */
    public function getComment()
    {
        return $this->comment;
    }
}
