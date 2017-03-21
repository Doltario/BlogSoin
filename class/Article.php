<?php
  // src/Article.php
  /**
   * @Entity @Table(name="articles")
   **/
  class Article{
    /** @Id @Column(type="integer") @GeneratedValue **/
      protected $id;
    /** @Column(type="string", length=50, nullable=true) **/
      protected $titre;
    /** @Column(type="text", length=5000, nullable=true) **/
      protected $content;
    /** @Column(type="date", length=50, nullable=true) **/
      protected $date;
    /** @Column(type="text", length=500, nullable=true) **/
      protected $sumup;
      /**
          * @OneToOne(targetEntity="User", mappedBy="article")
          * @JoinColumn(name="user_id", referencedColumnName="id")
      **/
        protected $user;
      /**
          * @OneToOne(targetEntity="Comment", mappedBy="article")
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Article
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param \User $user
     *
     * @return Article
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

    /**
     * Set comment
     *
     * @param \Comment $comment
     *
     * @return Article
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

    /**
     * Set sumup
     *
     * @param string $sumup
     *
     * @return Article
     */
    public function setSumup($sumup)
    {
        $this->sumup = $sumup;

        return $this;
    }

    /**
     * Get sumup
     *
     * @return string
     */
    public function getSumup()
    {
        return $this->sumup;
    }
}
