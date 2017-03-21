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
    /**
        * @OneToOne(targetEntity="Article", mappedBy="comment")
        * @JoinColumn(name="article_id", referencedColumnName="id")
    **/
      protected $article;
    /**
        * @OneToOne(targetEntity="User", mappedBy="comment")
        * @JoinColumn(name="user_id", referencedColumnName="id")
    **/
      protected $user;
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
   * Set content
   *
   * @param string $content
   *
   * @return Comment
   */
  public function setContent($content)
  {
      $this->content = $content;

      return $this;
  }

  /**
   * Get content
   *
   * @return string
   */
  public function getContent()
  {
      return $this->content;
  }

  /**
   * Set dateTime
   *
   * @param \DateTime $dateTime
   *
   * @return Comment
   */
  public function setDateTime($dateTime)
  {
      $this->dateTime = $dateTime;

      return $this;
  }

  /**
   * Get dateTime
   *
   * @return \DateTime
   */
  public function getDateTime()
  {
      return $this->dateTime;
  }

    /**
     * Set article
     *
     * @param \Article $article
     *
     * @return Comment
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
     * Set user
     *
     * @param \User $user
     *
     * @return Comment
     */
    public function setUser(\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \User
     */
    public function getUser()
    {
        return $this->user;
    }
}
